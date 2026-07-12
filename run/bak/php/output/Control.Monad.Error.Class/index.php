<?php

namespace Control\Monad\Error\Class;

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
      case 'Control_Monad_Error_Class_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Control_Monad_Error_Class_discard': $v = (($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard; break;
      case 'Control_Monad_Error_Class_monadThrowMaybe': $v = (object)["throwError" => \Data\Function\majData_majFunction_const(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_monadMaybe = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe'));
  $__res = $__global_Data_Maybe_monadMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadThrowEither': $v = (object)["throwError" => function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Either_monadEither = ($GLOBALS['Data_Either_monadEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_monadEither'));
  $__res = $__global_Data_Either_monadEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadThrowEffect': $v = (object)["throwError" => ($GLOBALS['Effect_Exception_throwException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_throwException')), "Monad0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Effect_monadEffect = ($GLOBALS['Effect_monadEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monadEffect'));
  $__res = $__global_Effect_monadEffect;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadErrorMaybe': $v = (object)["catchError" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
$f = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ($f)($__global_Data_Unit_unit);
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
$a = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Just", $a);
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
})(), "MonadThrow0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Control_Monad_Error_Class_monadThrowMaybe = ($GLOBALS['Control_Monad_Error_Class_monadThrowMaybe'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowMaybe'));
  $__res = $__global_Control_Monad_Error_Class_monadThrowMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadErrorEither': $v = (object)["catchError" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Left":
$e = ($__case_0)->v0;
$h = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ($h)($e);
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
case "Right":
$x = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Right", $x);
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
})(), "MonadThrow0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Control_Monad_Error_Class_monadThrowEither = ($GLOBALS['Control_Monad_Error_Class_monadThrowEither'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowEither'));
  $__res = $__global_Control_Monad_Error_Class_monadThrowEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadErrorEffect': $v = (object)["catchError" => \Data\Function\majData_majFunction_flip(($GLOBALS['Effect_Exception_catchException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_catchException'))), "MonadThrow0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Control_Monad_Error_Class_monadThrowEffect = ($GLOBALS['Control_Monad_Error_Class_monadThrowEffect'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowEffect'));
  $__res = $__global_Control_Monad_Error_Class_monadThrowEffect;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Prelude/index.php';



// Control_Monad_Error_Class_MonadThrow$Dict
function majControl_majMonad_majError_majClass_majMonadmajThrowdollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_majMonadmajThrowdollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_MonadThrowdollarDict'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_majMonadmajThrowdollarmajDict';

// Control_Monad_Error_Class_MonadError$Dict
function majControl_majMonad_majError_majClass_majMonadmajErrordollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_majMonadmajErrordollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_MonadErrordollarDict'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_majMonadmajErrordollarmajDict';

// Control_Monad_Error_Class_throwError
function majControl_majMonad_majError_majClass_throwmajError($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_throwmajError';
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
$__res = ($v)->throwError;
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
$GLOBALS['Control_Monad_Error_Class_throwError'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_throwmajError';







// Control_Monad_Error_Class_liftMaybe
function majControl_majMonad_majError_majClass_liftmajMaybe($dictMonadThrow, $error = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_liftmajMaybe';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $throwError1 = ($dictMonadThrow)->throwError;
  $pure = ((((($dictMonadThrow)->Monad0)($__global_Prim_undefined))->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (($__global_Data_Maybe_maybe)(($throwError1)($error)))($pure);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_liftMaybe'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_liftmajMaybe';

// Control_Monad_Error_Class_liftEither
function majControl_majMonad_majError_majClass_liftmajEither($dictMonadThrow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_liftmajEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = (($__global_Data_Either_either)(($dictMonadThrow)->throwError))(((((($dictMonadThrow)->Monad0)($__global_Prim_undefined))->Applicative0)($__global_Prim_undefined))->pure);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_liftEither'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_liftmajEither';

// Control_Monad_Error_Class_catchError
function majControl_majMonad_majError_majClass_catchmajError($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_catchmajError';
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
$__res = ($v)->catchError;
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
$GLOBALS['Control_Monad_Error_Class_catchError'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_catchmajError';

// Control_Monad_Error_Class_catchJust
function majControl_majMonad_majError_majClass_catchmajJust($dictMonadError, $p = null, $act = null, $handler = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_catchmajJust';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $throwError1 = ((($dictMonadError)->MonadThrow0)($__global_Prim_undefined))->throwError;
  $catchError1 = ($dictMonadError)->catchError;
  $handle = function($e) use ($p, $throwError1, $handler) {
  $__num = \func_num_args();
  $v = ($p)($e);
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
if (($__match_0 === false)) {
if (true) {
$__res = ($throwError1)($e);
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
$b = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = ($handler)($b);
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
};
  $__res = (($catchError1)($act))($handle);
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_catchJust'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_catchmajJust';

// Control_Monad_Error_Class_try
function majControl_majMonad_majError_majClass_try($dictMonadError, $a = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_try';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $catchError1 = ($dictMonadError)->catchError;
  $Monad0 = (((($dictMonadError)->MonadThrow0)($__global_Prim_undefined))->Monad0)($__global_Prim_undefined);
  $map = ((((((($Monad0)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (($catchError1)((($map)(function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a)))(function($__x) use ($pure) {
  $__num = \func_num_args();
  $__res = ($pure)((function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_try'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_try';

// Control_Monad_Error_Class_withResource
function majControl_majMonad_majError_majClass_withmajResource($dictMonadError, $acquire = null, $release = null, $kleisli = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majMonad_majError_majClass_withmajResource';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Error_Class_try = ($GLOBALS['Control_Monad_Error_Class_try'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_try'));
  $__global_Control_Monad_Error_Class_discard = ($GLOBALS['Control_Monad_Error_Class_discard'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_discard'));
  $__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
  $MonadThrow0 = (($dictMonadError)->MonadThrow0)($__global_Prim_undefined);
  $Monad0 = (($MonadThrow0)->Monad0)($__global_Prim_undefined);
  $Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $try1 = ($__global_Control_Monad_Error_Class_try)($dictMonadError);
  $discard1 = ($__global_Control_Monad_Error_Class_discard)($Bind1);
  $throwError1 = ($MonadThrow0)->throwError;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (($bind)($acquire))(function($resource) use ($bind, $try1, $kleisli, $discard1, $release, $__global_Data_Either_either, $throwError1, $pure) {
  $__num = \func_num_args();
  $__res = (($bind)(($try1)(($kleisli)($resource))))(function($result) use ($discard1, $release, $resource, $__global_Data_Either_either, $throwError1, $pure) {
  $__num = \func_num_args();
  $__res = (($discard1)(($release)($resource)))(function($dollar__unused) use ($__global_Data_Either_either, $throwError1, $pure, $result) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Either_either)($throwError1))($pure))($result);
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_withResource'] = __NAMESPACE__ . '\\majControl_majMonad_majError_majClass_withmajResource';

