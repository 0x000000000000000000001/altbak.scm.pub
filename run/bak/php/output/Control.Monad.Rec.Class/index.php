<?php

namespace Control\Monad\Rec\Class;

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
      case 'Control_Monad_Rec_Class_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Control_Monad_Rec_Class_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Control_Monad_Rec_Class_bindFlipped': $v = \Control\Bind\majControl_majBind_bindmajFlipped(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Control_Monad_Rec_Class_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Control_Monad_Rec_Class_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Control_Monad_Rec_Class_map': $v = (($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect')))->map; break;
      case 'Control_Monad_Rec_Class_monadRecMaybe': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
  $g = function($v) use ($f) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Loop"))) {
$a = (($__case_0)->v0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Loop", ($f)($a));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", new Phpurs_Data1("Just", $b));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = (($__global_Control_Monad_Rec_Class_tailRec)($g))(($f)($a0));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_monadMaybe = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe'));
  $__res = $__global_Data_Maybe_monadMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Rec_Class_monadRecIdentity': $v = (object)["tailRecM" => function($f) {
  $__num = \func_num_args();
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
  $runIdentity = function($v) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = function($__x) use ($__global_Data_Identity_Identity, $__global_Control_Monad_Rec_Class_tailRec, $runIdentity, $f) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Identity_Identity)((($__global_Control_Monad_Rec_Class_tailRec)(function($__x) use ($runIdentity, $f) {
  $__num = \func_num_args();
  $__res = ($runIdentity)(($f)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_monadIdentity = ($GLOBALS['Data_Identity_monadIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_monadIdentity'));
  $__res = $__global_Data_Identity_monadIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Rec_Class_monadRecFunction': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null, $e = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
  $__res = (($__global_Control_Monad_Rec_Class_tailRec)(function($a) use ($f, $e) {
  $__num = \func_num_args();
  $__res = (($f)($a))($e);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a0);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Control_Monad_monadFn = ($GLOBALS['Control_Monad_monadFn'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_monadFn'));
  $__res = $__global_Control_Monad_monadFn;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Rec_Class_monadRecEither': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
  $g = function($v) use ($f) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Left":
$e = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", new Phpurs_Data1("Left", $e));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Loop"))) {
$a = (($__case_0)->v0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Loop", ($f)($a));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", new Phpurs_Data1("Right", $b));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = (($__global_Control_Monad_Rec_Class_tailRec)($g))(($f)($a0));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Either_monadEither = ($GLOBALS['Data_Either_monadEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_monadEither'));
  $__res = $__global_Data_Either_monadEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Rec_Class_monadRecEffect': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Rec_Class_bind = ($GLOBALS['Control_Monad_Rec_Class_bind'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bind'));
  $__global_Control_Monad_Rec_Class_bindFlipped = ($GLOBALS['Control_Monad_Rec_Class_bindFlipped'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bindFlipped'));
  $__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
  $__global_Control_Monad_Rec_Class_discard = ($GLOBALS['Control_Monad_Rec_Class_discard'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_discard'));
  $__global_Effect_untilE = ($GLOBALS['Effect_untilE'] ?? \Effect\phpurs_eval_thunk('Effect_untilE'));
  $__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
  $__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
  $__global_Control_Monad_Rec_Class_pure = ($GLOBALS['Control_Monad_Rec_Class_pure'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_pure'));
  $__global_Control_Monad_Rec_Class_map = ($GLOBALS['Control_Monad_Rec_Class_map'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_map'));
  $fromDone = ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Prim_undefined) {
  $__fn = function($dollar__unused, $v = null) use ($__global_Prim_undefined, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (function($dollar__unused) use ($v) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Done":
$b = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = $b;
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__global_Prim_undefined);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = (($__global_Control_Monad_Rec_Class_bind)((($__global_Control_Monad_Rec_Class_bindFlipped)($__global_Effect_Ref__new))(($f)($a))))(function($r) use ($__global_Control_Monad_Rec_Class_discard, $__global_Effect_untilE, $__global_Control_Monad_Rec_Class_bind, $__global_Effect_Ref_read, $f, $__global_Effect_Ref_write, $__global_Control_Monad_Rec_Class_pure, $__global_Control_Monad_Rec_Class_map, $fromDone) {
  $__num = \func_num_args();
  $__res = (($__global_Control_Monad_Rec_Class_discard)(($__global_Effect_untilE)((($__global_Control_Monad_Rec_Class_bind)(($__global_Effect_Ref_read)($r)))(function($v) use ($__global_Control_Monad_Rec_Class_bind, $f, $__global_Effect_Ref_write, $r, $__global_Control_Monad_Rec_Class_pure) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "Loop":
$a__prime__ = ($__case_0)->v0;
if (($__match_1 === false)) {
if (true) {
$__res = (($__global_Control_Monad_Rec_Class_bind)(($f)($a__prime__)))(function($e) use ($__global_Control_Monad_Rec_Class_bind, $__global_Effect_Ref_write, $r, $__global_Control_Monad_Rec_Class_pure) {
  $__num = \func_num_args();
  $__res = (($__global_Control_Monad_Rec_Class_bind)((($__global_Effect_Ref_write)($e))($r)))(function($dollar__unused) use ($__global_Control_Monad_Rec_Class_pure) {
  $__num = \func_num_args();
  $__res = ($__global_Control_Monad_Rec_Class_pure)(false);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
goto __end;;
$__match_1 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "Done":
if (($__match_1 === false)) {
if (true) {
$__res = ($__global_Control_Monad_Rec_Class_pure)(true);
goto __end;;
$__match_1 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))))(function($dollar__unused) use ($__global_Control_Monad_Rec_Class_map, $fromDone, $__global_Effect_Ref_read, $r) {
  $__num = \func_num_args();
  $__res = (($__global_Control_Monad_Rec_Class_map)($fromDone))(($__global_Effect_Ref_read)($r));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Effect_monadEffect = ($GLOBALS['Effect_monadEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monadEffect'));
  $__res = $__global_Effect_monadEffect;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Rec_Class_functorStep': $v = (object)["map" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $m;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Loop":
$v = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Loop", $v);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Done":
$v = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", ($f)($v));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Rec_Class_bifunctorStep': $v = (object)["bimap" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_2)->tag) {
case "Loop":
$f = $__case_0;
$a = ($__case_2)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Loop", ($f)($a));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
switch (($__case_2)->tag) {
case "Done":
$g = $__case_1;
$b = ($__case_2)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", ($g)($b));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';







// Control_Monad_Rec_Class_Loop
function majControl_majMonad_majRec_majClass_majLoop($value0) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_majLoop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Loop", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_Loop'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_majLoop';

// Control_Monad_Rec_Class_Done
function majControl_majMonad_majRec_majClass_majDone($value0) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_majDone';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Done", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_Done'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_majDone';

// Control_Monad_Rec_Class_MonadRec$Dict
function majControl_majMonad_majRec_majClass_majMonadmajRecdollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_majMonadmajRecdollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_MonadRecdollarDict'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_majMonadmajRecdollarmajDict';

// Control_Monad_Rec_Class_tailRecM
function majControl_majMonad_majRec_majClass_tailmajRecmajM($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_tailmajRecmajM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $dict;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($v)->tailRecM;
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_tailmajRecmajM';

// Control_Monad_Rec_Class_tailRecM2
function majControl_majMonad_majRec_majClass_tailmajRecmajM2($dictMonadRec, $f = null, $a = null, $b = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_tailmajRecmajM2';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $tailRecM1 = ($dictMonadRec)->tailRecM;
  $__res = (($tailRecM1)(function($o) use ($f) {
  $__num = \func_num_args();
  $__res = (($f)(($o)->a))(($o)->b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b]);
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM2'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_tailmajRecmajM2';

// Control_Monad_Rec_Class_tailRecM3
function majControl_majMonad_majRec_majClass_tailmajRecmajM3($dictMonadRec, $f = null, $a = null, $b = null, $c = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_tailmajRecmajM3';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $tailRecM1 = ($dictMonadRec)->tailRecM;
  $__res = (($tailRecM1)(function($o) use ($f) {
  $__num = \func_num_args();
  $__res = ((($f)(($o)->a))(($o)->b))(($o)->c);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b, "c" => $c]);
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM3'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_tailmajRecmajM3';

// Control_Monad_Rec_Class_untilJust
function majControl_majMonad_majRec_majClass_untilmajJust($dictMonadRec, $m = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_untilmajJust';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $tailRecM1 = ($dictMonadRec)->tailRecM;
  $mapFlipped = ($__global_Data_Functor_mapFlipped)((((((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (($tailRecM1)(function($v) use ($mapFlipped, $m, $__global_Data_Unit_unit) {
  $__num = \func_num_args();
  $__res = (($mapFlipped)($m))(function($v1) use ($__global_Data_Unit_unit) {
  $__num = \func_num_args();
  $__case_0 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Loop", $__global_Data_Unit_unit);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", $x);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_untilJust'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_untilmajJust';

// Control_Monad_Rec_Class_whileJust
function majControl_majMonad_majRec_majClass_whilemajJust($dictMonoid, $dictMonadRec = null, $m = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_whilemajJust';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $tailRecM1 = ($dictMonadRec)->tailRecM;
  $mapFlipped = ($__global_Data_Functor_mapFlipped)((((((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (($tailRecM1)(function($v) use ($mapFlipped, $m, $append) {
  $__num = \func_num_args();
  $__res = (($mapFlipped)($m))(function($v1) use ($v, $append) {
  $__num = \func_num_args();
  $__case_0 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Done", $v);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Loop", (($append)($v))($x));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($mempty);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_whileJust'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_whilemajJust';

// Control_Monad_Rec_Class_tailRec
function majControl_majMonad_majRec_majClass_tailmajRec($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_tailmajRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $go = function($v) use (&$go, $f) {
  $__num = \func_num_args();
  while (true) {
$__case_0 = $v;
$__match_0 = false;
if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Loop":
$a = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__tco_tmp_0 = ($f)($a);
$v = $__tco_tmp_0;
continue 2;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Done":
$b = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = $b;
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = function($__x) use (&$go, $f) {
  $__num = \func_num_args();
  $__res = ($go)(($f)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_tailmajRec';

// Control_Monad_Rec_Class_tailRec2
function majControl_majMonad_majRec_majClass_tailmajRec2($f, $a = null, $b = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_tailmajRec2';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
  $__res = (($__global_Control_Monad_Rec_Class_tailRec)(function($o) use ($f) {
  $__num = \func_num_args();
  $__res = (($f)(($o)->a))(($o)->b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b]);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec2'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_tailmajRec2';

// Control_Monad_Rec_Class_tailRec3
function majControl_majMonad_majRec_majClass_tailmajRec3($f, $a = null, $b = null, $c = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_tailmajRec3';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
  $__res = (($__global_Control_Monad_Rec_Class_tailRec)(function($o) use ($f) {
  $__num = \func_num_args();
  $__res = ((($f)(($o)->a))(($o)->b))(($o)->c);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b, "c" => $c]);
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec3'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_tailmajRec3';






// Control_Monad_Rec_Class_loop3
function majControl_majMonad_majRec_majClass_loop3($a, $b = null, $c = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_loop3';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Loop", (object)["a" => $a, "b" => $b, "c" => $c]);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_loop3'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_loop3';

// Control_Monad_Rec_Class_loop2
function majControl_majMonad_majRec_majClass_loop2($a, $b = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_loop2';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data1("Loop", (object)["a" => $a, "b" => $b]);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_loop2'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_loop2';


// Control_Monad_Rec_Class_forever
function majControl_majMonad_majRec_majClass_forever($dictMonadRec, $ma = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majRec_majClass_forever';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_voidRight = ($GLOBALS['Data_Functor_voidRight'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_voidRight'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $tailRecM1 = ($dictMonadRec)->tailRecM;
  $voidRight = ($__global_Data_Functor_voidRight)((((((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (($tailRecM1)(function($u) use ($voidRight, $ma) {
  $__num = \func_num_args();
  $__res = (($voidRight)(new Phpurs_Data1("Loop", $u)))($ma);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_forever'] = __NAMESPACE__ . '\\majControl_majMonad_majRec_majClass_forever';


