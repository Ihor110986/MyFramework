<?php


namespace App\MyModels;


/**
 * @Entity
 * @Table(name="tasks")
 */
class Posts
{
  /**
   * @Id
   * @Column(name="id", type="integer")
   * @GeneratedValue
   */
  private ?int $id;

  /**
   * @Column(name="text", type="string", length=600, nullable=false)
   */
  private ?string $text;

  public function __construct(string $text)
  {
    $this->text = $text;
  }

/**
 * @return int
*/
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return string
   */

}