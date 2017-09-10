<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<39fb082a9612ce76a0d1a1411b677a0f>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class FieldInitializer extends EditableSyntax {

  private EditableSyntax $_name;
  private EditableSyntax $_arrow;
  private EditableSyntax $_value;

  public function __construct(
    EditableSyntax $name,
    EditableSyntax $arrow,
    EditableSyntax $value,
  ) {
    parent::__construct('field_initializer');
    $this->_name = $name;
    $this->_arrow = $arrow;
    $this->_value = $value;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $name = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['field_initializer_name'],
      $position,
      $source,
    );
    $position += $name->width();
    $arrow = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['field_initializer_arrow'],
      $position,
      $source,
    );
    $position += $arrow->width();
    $value = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['field_initializer_value'],
      $position,
      $source,
    );
    $position += $value->width();
    return new self($name, $arrow, $value);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'name' => $this->_name;
    yield 'arrow' => $this->_arrow;
    yield 'value' => $this->_value;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $name = $this->_name->rewrite($rewriter, $parents);
    $arrow = $this->_arrow->rewrite($rewriter, $parents);
    $value = $this->_value->rewrite($rewriter, $parents);
    if (
      $name === $this->_name &&
      $arrow === $this->_arrow &&
      $value === $this->_value
    ) {
      return $this;
    }
    return new self($name, $arrow, $value);
  }

  public function name(): EditableSyntax {
    return $this->namex();
  }

  public function namex(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_name);
  }

  public function raw_name(): EditableSyntax {
    return $this->_name;
  }

  public function with_name(EditableSyntax $value): this {
    return new self($value, $this->_arrow, $this->_value);
  }

  public function arrow(): EqualGreaterThanToken {
    return $this->arrowx();
  }

  public function arrowx(): EqualGreaterThanToken {
    return TypeAssert::isInstanceOf(EqualGreaterThanToken::class, $this->_arrow);
  }

  public function raw_arrow(): EditableSyntax {
    return $this->_arrow;
  }

  public function with_arrow(EditableSyntax $value): this {
    return new self($this->_name, $value, $this->_value);
  }

  public function value(): EditableSyntax {
    return $this->valuex();
  }

  public function valuex(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_value);
  }

  public function raw_value(): EditableSyntax {
    return $this->_value;
  }

  public function with_value(EditableSyntax $value): this {
    return new self($this->_name, $this->_arrow, $value);
  }
}
