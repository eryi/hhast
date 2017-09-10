<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<249059d8f0efec4d98b8cb201b0012ea>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class MapArrayTypeSpecifier extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_left_angle;
  private EditableSyntax $_key;
  private EditableSyntax $_comma;
  private EditableSyntax $_value;
  private EditableSyntax $_right_angle;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $left_angle,
    EditableSyntax $key,
    EditableSyntax $comma,
    EditableSyntax $value,
    EditableSyntax $right_angle,
  ) {
    parent::__construct('map_array_type_specifier');
    $this->_keyword = $keyword;
    $this->_left_angle = $left_angle;
    $this->_key = $key;
    $this->_comma = $comma;
    $this->_value = $value;
    $this->_right_angle = $right_angle;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['map_array_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $left_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['map_array_left_angle'],
      $position,
      $source,
    );
    $position += $left_angle->width();
    $key = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['map_array_key'],
      $position,
      $source,
    );
    $position += $key->width();
    $comma = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['map_array_comma'],
      $position,
      $source,
    );
    $position += $comma->width();
    $value = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['map_array_value'],
      $position,
      $source,
    );
    $position += $value->width();
    $right_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['map_array_right_angle'],
      $position,
      $source,
    );
    $position += $right_angle->width();
    return new self($keyword, $left_angle, $key, $comma, $value, $right_angle);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'left_angle' => $this->_left_angle;
    yield 'key' => $this->_key;
    yield 'comma' => $this->_comma;
    yield 'value' => $this->_value;
    yield 'right_angle' => $this->_right_angle;
  }

  public function rewrite(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): EditableSyntax {
    $parents = $parents === null ? vec[] : vec($parents);
    $child_parents = $parents;
    $child_parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $child_parents);
    $left_angle = $this->_left_angle->rewrite($rewriter, $child_parents);
    $key = $this->_key->rewrite($rewriter, $child_parents);
    $comma = $this->_comma->rewrite($rewriter, $child_parents);
    $value = $this->_value->rewrite($rewriter, $child_parents);
    $right_angle = $this->_right_angle->rewrite($rewriter, $child_parents);
    if (
      $keyword === $this->_keyword &&
      $left_angle === $this->_left_angle &&
      $key === $this->_key &&
      $comma === $this->_comma &&
      $value === $this->_value &&
      $right_angle === $this->_right_angle
    ) {
      $node = $this;
    } else {
      $node =
        new self($keyword, $left_angle, $key, $comma, $value, $right_angle);
    }
    return $rewriter($node, $parents);
  }

  public function keyword(): ArrayToken {
    return $this->keywordx();
  }

  public function keywordx(): ArrayToken {
    return TypeAssert::isInstanceOf(ArrayToken::class, $this->_keyword);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    return new self(
      $value,
      $this->_left_angle,
      $this->_key,
      $this->_comma,
      $this->_value,
      $this->_right_angle,
    );
  }

  public function left_angle(): LessThanToken {
    return $this->left_anglex();
  }

  public function left_anglex(): LessThanToken {
    return TypeAssert::isInstanceOf(LessThanToken::class, $this->_left_angle);
  }

  public function raw_left_angle(): EditableSyntax {
    return $this->_left_angle;
  }

  public function with_left_angle(EditableSyntax $value): this {
    return new self(
      $this->_keyword,
      $value,
      $this->_key,
      $this->_comma,
      $this->_value,
      $this->_right_angle,
    );
  }

  public function key(): SimpleTypeSpecifier {
    return $this->keyx();
  }

  public function keyx(): SimpleTypeSpecifier {
    return TypeAssert::isInstanceOf(SimpleTypeSpecifier::class, $this->_key);
  }

  public function raw_key(): EditableSyntax {
    return $this->_key;
  }

  public function with_key(EditableSyntax $value): this {
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $value,
      $this->_comma,
      $this->_value,
      $this->_right_angle,
    );
  }

  public function comma(): CommaToken {
    return $this->commax();
  }

  public function commax(): CommaToken {
    return TypeAssert::isInstanceOf(CommaToken::class, $this->_comma);
  }

  public function raw_comma(): EditableSyntax {
    return $this->_comma;
  }

  public function with_comma(EditableSyntax $value): this {
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_key,
      $value,
      $this->_value,
      $this->_right_angle,
    );
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
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_key,
      $this->_comma,
      $value,
      $this->_right_angle,
    );
  }

  public function right_angle(): ?GreaterThanToken {
    return $this->_right_angle->is_missing()
      ? null
      : TypeAssert::isInstanceOf(GreaterThanToken::class, $this->_right_angle);
  }

  public function right_anglex(): GreaterThanToken {
    return
      TypeAssert::isInstanceOf(GreaterThanToken::class, $this->_right_angle);
  }

  public function raw_right_angle(): EditableSyntax {
    return $this->_right_angle;
  }

  public function with_right_angle(EditableSyntax $value): this {
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_key,
      $this->_comma,
      $this->_value,
      $value,
    );
  }
}