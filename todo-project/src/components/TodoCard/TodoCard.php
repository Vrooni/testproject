<?php

namespace App\components\TodoCard;

enum Status: int
{
  case Done = 1;
  case Planned = 0;

  public function get_label()
  {
    return match ($this) {
      self::Done => "Done",
      self::Planned => "Planned",
    };
  }
}

class TodoCard
{

  public function __construct(
    private int $id,
    private string $title,
    private string $desc,
    private string $status,
  ) {
    $this->status = Status::from($this->status)->get_label();

    $this->id = htmlspecialchars($this->id);
    $this->title = htmlspecialchars($this->title);
    $this->desc = htmlspecialchars($this->desc);
    $this->status = htmlspecialchars($this->status);
  }

  public function create_card()
  {
    $tick = $this->status == "Done" ? "✔️" : " ";

    $card = <<<CARD
      <p>$tick</p>
      <p>$this->title</p>
      <p class="remove-right">$this->desc</p>
      <form class="status-form" action="" method="post">
        <button class="done" type="submit" name="done" value="$this->id">✔️</button>
        <button class="delete" type="submit" name="delete" value="$this->id">𝗫</button>
      </form>
    CARD;

    return $card;
  }
}
