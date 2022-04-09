<?php


namespace App\MyModels;


/**
 * @Entity
 * @Table(name="users")
 */
class Users
{
  /**
   * @Id
   * @Column(name="id", type="integer")
   * @GeneratedValue
   */
  private ?int $id;

  /**
   * @Column(name="login", type="string", length=150, nullable=false)
   */
  private string $login;

  /**
   * @Column(name="login", type="string", length=150, nullable=false, unique=true)
   */
  private string $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  /**
   * @return int|null
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getLogin(): string
  {
    return $this->login;
  }

  /**
   * @return string
   */
  public function getPassword(): string
  {
    return $this->password;
  }
}