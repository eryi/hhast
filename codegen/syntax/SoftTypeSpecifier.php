<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<2bb9c2c5b1b461db3d125a4b2c1e5354>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

final class SoftTypeSpecifier extends EditableNode {

  private EditableNode $_at;
  private EditableNode $_type;

  public function __construct(EditableNode $at, EditableNode $type) {
    parent::__construct('soft_type_specifier');
    $this->_at = $at;
    $this->_type = $type;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $at = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['soft_at'],
      $file,
      $offset,
      $source,
    );
    $offset += $at->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['soft_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new self($at, $type);
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableNode> {
    return dict[
      'at' => $this->_at,
      'type' => $this->_type,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $at = $this->_at->rewrite($rewriter, $parents);
    $type = $this->_type->rewrite($rewriter, $parents);
    if ($at === $this->_at && $type === $this->_type) {
      return $this;
    }
    return new self($at, $type);
  }

  public function getAtUNTYPED(): EditableNode {
    return $this->_at;
  }

  public function withAt(EditableNode $value): this {
    if ($value === $this->_at) {
      return $this;
    }
    return new self($value, $this->_type);
  }

  public function hasAt(): bool {
    return !$this->_at->isMissing();
  }

  /**
   * @returns AtToken
   */
  public function getAt(): AtToken {
    return TypeAssert\instance_of(AtToken::class, $this->_at);
  }

  public function getTypeUNTYPED(): EditableNode {
    return $this->_type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->_type) {
      return $this;
    }
    return new self($this->_at, $value);
  }

  public function hasType(): bool {
    return !$this->_type->isMissing();
  }

  /**
   * @returns SimpleTypeSpecifier | GenericTypeSpecifier |
   * NullableTypeSpecifier | TupleTypeSpecifier | ClosureTypeSpecifier |
   * MapArrayTypeSpecifier
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->_type);
  }
}
