<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<7f73f8700f38efb4393c368a652a2497>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class DefaultLabel extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_colon;

  public function __construct(EditableSyntax $keyword, EditableSyntax $colon) {
    parent::__construct('default_label');
    $this->_keyword = $keyword;
    $this->_colon = $colon;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['default_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $colon = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['default_colon'],
      $position,
      $source,
    );
    $position += $colon->width();
    return new self($keyword, $colon);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'colon' => $this->_colon;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $colon = $this->_colon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $colon === $this->_colon
    ) {
      return $this;
    }
    return new self($keyword, $colon);
  }

  public function keyword(): DefaultToken {
    return $this->keywordx();
  }

  public function keywordx(): DefaultToken {
    return TypeAssert::isInstanceOf(DefaultToken::class, $this->_keyword);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    return new self($value, $this->_colon);
  }

  public function colon(): EditableSyntax {
    return $this->colonx();
  }

  public function colonx(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_colon);
  }

  public function raw_colon(): EditableSyntax {
    return $this->_colon;
  }

  public function with_colon(EditableSyntax $value): this {
    return new self($this->_keyword, $value);
  }
}
