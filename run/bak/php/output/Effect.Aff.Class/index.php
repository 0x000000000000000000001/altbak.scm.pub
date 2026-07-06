<?php

namespace Effect\Aff\Class;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Class/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Effect_Aff_Class_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Effect_Aff_Class_lift': $v = (($GLOBALS['Control_Monad_Cont_Trans_monadTransContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadTransContT')))->lift; break;
      case 'Effect_Aff_Class_lift1': $v = (($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadTransExceptT')))->lift; break;
      case 'Effect_Aff_Class_lift2': $v = (($GLOBALS['Control_Monad_List_Trans_monadTransListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadTransListT')))->lift; break;
      case 'Effect_Aff_Class_lift3': $v = (($GLOBALS['Control_Monad_Maybe_Trans_monadTransMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadTransMaybeT')))->lift; break;
      case 'Effect_Aff_Class_lift4': $v = (($GLOBALS['Control_Monad_Reader_Trans_monadTransReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadTransReaderT')))->lift; break;
      case 'Effect_Aff_Class_lift5': $v = (($GLOBALS['Control_Monad_State_Trans_monadTransStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadTransStateT')))->lift; break;
      case 'Effect_Aff_Class_monadAffAff': $v = (object)["liftAff" => (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity, "MonadEffect0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_monadEffectAff = ($GLOBALS['Effect_Aff_monadEffectAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadEffectAff'));
  $__res = $__global_Effect_Aff_monadEffectAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };









// Effect_Aff_Class_MonadAff$Dict
function Effect_Aff_Class_MonadAff__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_MonadAff__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_MonadAff__dollar__Dict'] = __NAMESPACE__ . '\\Effect_Aff_Class_MonadAff__dollar__Dict';


// Effect_Aff_Class_liftAff
function Effect_Aff_Class_liftAff($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_liftAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->liftAff;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_liftAff'] = __NAMESPACE__ . '\\Effect_Aff_Class_liftAff';

// Effect_Aff_Class_monadAffContT
function Effect_Aff_Class_monadAffContT($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Cont_Trans_monadEffectContT = ($GLOBALS['Control_Monad_Cont_Trans_monadEffectContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadEffectContT'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Effect_Aff_Class_lift = ($GLOBALS['Effect_Aff_Class_lift'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $monadEffectContT = ($__global_Control_Monad_Cont_Trans_monadEffectContT)($MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(($__global_Effect_Aff_Class_lift)((($MonadEffect0)->Monad0)($__global_Prim_undefined)), ($dictMonadAff)->liftAff), "MonadEffect0" => function($__dollar____unused) use ($monadEffectContT) {
  $__num = func_num_args();
  $__res = $monadEffectContT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffContT'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffContT';

// Effect_Aff_Class_monadAffExceptT
function Effect_Aff_Class_monadAffExceptT($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadEffectExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadEffectExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadEffectExceptT'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Effect_Aff_Class_lift1 = ($GLOBALS['Effect_Aff_Class_lift1'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift1'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $monadEffectExceptT = ($__global_Control_Monad_Except_Trans_monadEffectExceptT)($MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(($__global_Effect_Aff_Class_lift1)((($MonadEffect0)->Monad0)($__global_Prim_undefined)), ($dictMonadAff)->liftAff), "MonadEffect0" => function($__dollar____unused) use ($monadEffectExceptT) {
  $__num = func_num_args();
  $__res = $monadEffectExceptT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffExceptT'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffExceptT';

// Effect_Aff_Class_monadAffListT
function Effect_Aff_Class_monadAffListT($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_monadEffectListT = ($GLOBALS['Control_Monad_List_Trans_monadEffectListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadEffectListT'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Effect_Aff_Class_lift2 = ($GLOBALS['Effect_Aff_Class_lift2'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift2'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $monadEffectListT = ($__global_Control_Monad_List_Trans_monadEffectListT)($MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(($__global_Effect_Aff_Class_lift2)((($MonadEffect0)->Monad0)($__global_Prim_undefined)), ($dictMonadAff)->liftAff), "MonadEffect0" => function($__dollar____unused) use ($monadEffectListT) {
  $__num = func_num_args();
  $__res = $monadEffectListT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffListT'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffListT';

// Effect_Aff_Class_monadAffMaybe
function Effect_Aff_Class_monadAffMaybe($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_monadEffectMaybe = ($GLOBALS['Control_Monad_Maybe_Trans_monadEffectMaybe'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadEffectMaybe'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Effect_Aff_Class_lift3 = ($GLOBALS['Effect_Aff_Class_lift3'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift3'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $monadEffectMaybe = ($__global_Control_Monad_Maybe_Trans_monadEffectMaybe)($MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(($__global_Effect_Aff_Class_lift3)((($MonadEffect0)->Monad0)($__global_Prim_undefined)), ($dictMonadAff)->liftAff), "MonadEffect0" => function($__dollar____unused) use ($monadEffectMaybe) {
  $__num = func_num_args();
  $__res = $monadEffectMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffMaybe'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffMaybe';

// Effect_Aff_Class_monadAffRWS
function Effect_Aff_Class_monadAffRWS($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffRWS';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadEffectRWS = ($GLOBALS['Control_Monad_RWS_Trans_monadEffectRWS'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadEffectRWS'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Control_Monad_RWS_Trans_monadTransRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadTransRWST'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $Monad0 = (($MonadEffect0)->Monad0)($__global_Prim_undefined);
  $liftAff1 = ($dictMonadAff)->liftAff;
  $__res = function($dictMonoid) use ($__global_Control_Monad_RWS_Trans_monadEffectRWS, &$MonadEffect0, $__global_Effect_Aff_Class_compose, $__global_Control_Monad_RWS_Trans_monadTransRWST, &$Monad0, $liftAff1) {
  $__num = func_num_args();
  $monadEffectRWS = ($__global_Control_Monad_RWS_Trans_monadEffectRWS)($dictMonoid, $MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(((($__global_Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid))->lift)($Monad0), $liftAff1), "MonadEffect0" => function($__dollar____unused) use ($monadEffectRWS) {
  $__num = func_num_args();
  $__res = $monadEffectRWS;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffRWS'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffRWS';

// Effect_Aff_Class_monadAffReader
function Effect_Aff_Class_monadAffReader($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffReader';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_monadEffectReader = ($GLOBALS['Control_Monad_Reader_Trans_monadEffectReader'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadEffectReader'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Effect_Aff_Class_lift4 = ($GLOBALS['Effect_Aff_Class_lift4'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift4'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $monadEffectReader = ($__global_Control_Monad_Reader_Trans_monadEffectReader)($MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(($__global_Effect_Aff_Class_lift4)((($MonadEffect0)->Monad0)($__global_Prim_undefined)), ($dictMonadAff)->liftAff), "MonadEffect0" => function($__dollar____unused) use ($monadEffectReader) {
  $__num = func_num_args();
  $__res = $monadEffectReader;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffReader'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffReader';

// Effect_Aff_Class_monadAffState
function Effect_Aff_Class_monadAffState($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffState';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadEffectState = ($GLOBALS['Control_Monad_State_Trans_monadEffectState'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadEffectState'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Effect_Aff_Class_lift5 = ($GLOBALS['Effect_Aff_Class_lift5'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_lift5'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $monadEffectState = ($__global_Control_Monad_State_Trans_monadEffectState)($MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(($__global_Effect_Aff_Class_lift5)((($MonadEffect0)->Monad0)($__global_Prim_undefined)), ($dictMonadAff)->liftAff), "MonadEffect0" => function($__dollar____unused) use ($monadEffectState) {
  $__num = func_num_args();
  $__res = $monadEffectState;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffState'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffState';

// Effect_Aff_Class_monadAffWriter
function Effect_Aff_Class_monadAffWriter($dictMonadAff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Class_monadAffWriter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Writer_Trans_monadEffectWriter = ($GLOBALS['Control_Monad_Writer_Trans_monadEffectWriter'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadEffectWriter'));
  $__global_Effect_Aff_Class_compose = ($GLOBALS['Effect_Aff_Class_compose'] ?? \Effect\Aff\Class\phpurs_eval_thunk('Effect_Aff_Class_compose'));
  $__global_Control_Monad_Writer_Trans_monadTransWriterT = ($GLOBALS['Control_Monad_Writer_Trans_monadTransWriterT'] ?? \Control\Monad\Writer\Trans\phpurs_eval_thunk('Control_Monad_Writer_Trans_monadTransWriterT'));
  $MonadEffect0 = (($dictMonadAff)->MonadEffect0)($__global_Prim_undefined);
  $Monad0 = (($MonadEffect0)->Monad0)($__global_Prim_undefined);
  $liftAff1 = ($dictMonadAff)->liftAff;
  $__res = function($dictMonoid) use ($__global_Control_Monad_Writer_Trans_monadEffectWriter, &$MonadEffect0, $__global_Effect_Aff_Class_compose, $__global_Control_Monad_Writer_Trans_monadTransWriterT, &$Monad0, $liftAff1) {
  $__num = func_num_args();
  $monadEffectWriter = ($__global_Control_Monad_Writer_Trans_monadEffectWriter)($dictMonoid, $MonadEffect0);
  $__res = (object)["liftAff" => ($__global_Effect_Aff_Class_compose)(((($__global_Control_Monad_Writer_Trans_monadTransWriterT)($dictMonoid))->lift)($Monad0), $liftAff1), "MonadEffect0" => function($__dollar____unused) use ($monadEffectWriter) {
  $__num = func_num_args();
  $__res = $monadEffectWriter;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Class_monadAffWriter'] = __NAMESPACE__ . '\\Effect_Aff_Class_monadAffWriter';

