<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<b9b0bf32cc2046edeff6fde1cc254d5a>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class TupleTypeExplicitSpecifier extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_left_angle;
  private EditableSyntax $_types;
  private EditableSyntax $_right_angle;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $left_angle,
    EditableSyntax $types,
    EditableSyntax $right_angle,
  ) {
    parent::__construct('tuple_type_explicit_specifier');
    $this->_keyword = $keyword;
    $this->_left_angle = $left_angle;
    $this->_types = $types;
    $this->_right_angle = $right_angle;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['tuple_type_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $left_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['tuple_type_left_angle'],
      $position,
      $source,
    );
    $position += $left_angle->width();
    $types = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['tuple_type_types'],
      $position,
      $source,
    );
    $position += $types->width();
    $right_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['tuple_type_right_angle'],
      $position,
      $source,
    );
    $position += $right_angle->width();
    return new self($keyword, $left_angle, $types, $right_angle);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'left_angle' => $this->_left_angle;
    yield 'types' => $this->_types;
    yield 'right_angle' => $this->_right_angle;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $left_angle = $this->_left_angle->rewrite($rewriter, $parents);
    $types = $this->_types->rewrite($rewriter, $parents);
    $right_angle = $this->_right_angle->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $left_angle === $this->_left_angle &&
      $types === $this->_types &&
      $right_angle === $this->_right_angle
    ) {
      return $this;
    }
    return new self($keyword, $left_angle, $types, $right_angle);
  }

  public function keyword(): EditableSyntax {
    return $this->keywordx();
  }

  public function keywordx(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_keyword);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    return new self($value, $this->_left_angle, $this->_types, $this->_right_angle);
  }

  public function left_angle(): EditableSyntax {
    return $this->left_anglex();
  }

  public function left_anglex(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_left_angle);
  }

  public function raw_left_angle(): EditableSyntax {
    return $this->_left_angle;
  }

  public function with_left_angle(EditableSyntax $value): this {
    return new self($this->_keyword, $value, $this->_types, $this->_right_angle);
  }

  public function types(): EditableSyntax {
    return $this->typesx();
  }

  public function typesx(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_types);
  }

  public function raw_types(): EditableSyntax {
    return $this->_types;
  }

  public function with_types(EditableSyntax $value): this {
    return new self($this->_keyword, $this->_left_angle, $value, $this->_right_angle);
  }

  public function right_angle(): EditableSyntax {
    return $this->right_anglex();
  }

  public function right_anglex(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_right_angle);
  }

  public function raw_right_angle(): EditableSyntax {
    return $this->_right_angle;
  }

  public function with_right_angle(EditableSyntax $value): this {
    return new self($this->_keyword, $this->_left_angle, $this->_types, $value);
  }
}
