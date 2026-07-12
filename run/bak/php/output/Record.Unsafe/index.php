<?php

namespace Record\Unsafe;

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - \count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num > 1) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = \array_merge($args, $more);
      if (\count($merged) >= $expected) {
        $res = $fn(...\array_slice($merged, 0, $expected));
        if (\count($merged) > $expected) {
          return $res(...\array_slice($merged, $expected));
        }
        return $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (isset($cache[$id]) || array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
$ffi_Record_Unsafe = \call_user_func(function() {
  $exports = [];
$unsafeHas = function($label, $rec = null) use (&$unsafeHas) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeHas) {
            return $unsafeHas(...\array_merge($__args, $more));
        };
    }
    return property_exists($rec, $label);
};

$unsafeGet = function($label, $rec = null) use (&$unsafeGet) {
    $num = \func_num_args();
    if ($num < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeGet) {
            return $unsafeGet(...\array_merge($__args, $more));
        };
    }
    $res = $rec->$label ?? null;
    if ($num > 2) {
        return $res(...\array_slice(\func_get_args(), 2));
    }
    return $res;
};

$unsafeSet = function($label, $value = null, $rec = null) use (&$unsafeSet) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeSet) {
            return $unsafeSet(...\array_merge($__args, $more));
        };
    }
    $copy = clone $rec;
    $copy->$label = $value;
    return $copy;
};

$unsafeDelete = function($label, $rec = null) use (&$unsafeDelete) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeDelete) {
            return $unsafeDelete(...\array_merge($__args, $more));
        };
    }
    $copy = clone $rec;
    unset($copy->$label);
    return $copy;
};

$exports['unsafeHas'] = $unsafeHas;
$exports['unsafeGet'] = $unsafeGet;
$exports['unsafeSet'] = $unsafeSet;
$exports['unsafeDelete'] = $unsafeDelete;
return $exports;
  return $exports;
});
$GLOBALS['Record_Unsafe_unsafeHas'] = $ffi_Record_Unsafe['unsafeHas'] ?? null;
$GLOBALS['Record_Unsafe_unsafeGet'] = $ffi_Record_Unsafe['unsafeGet'] ?? null;
$GLOBALS['Record_Unsafe_unsafeSet'] = $ffi_Record_Unsafe['unsafeSet'] ?? null;
$GLOBALS['Record_Unsafe_unsafeDelete'] = $ffi_Record_Unsafe['unsafeDelete'] ?? null;





