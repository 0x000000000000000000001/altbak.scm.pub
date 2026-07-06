<?php

namespace Effect\Class\Console;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Class.Console/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';

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
      case 'Effect_Class_Console_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Effect_Class_Console_discard': $v = (($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Effect_Class_Console_warnShow
function Effect_Class_Console_warnShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_warnShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_warnShow = ($GLOBALS['Effect_Console_warnShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_warnShow'));
  $liftEffect = ($dictMonadEffect)->liftEffect;
  $__res = function($dictShow) use ($__global_Effect_Class_Console_compose, $liftEffect, $__global_Effect_Console_warnShow) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Class_Console_compose)($liftEffect, ($__global_Effect_Console_warnShow)($dictShow));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_warnShow'] = __NAMESPACE__ . '\\Effect_Class_Console_warnShow';

// Effect_Class_Console_warn
function Effect_Class_Console_warn($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_warn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_warn = ($GLOBALS['Effect_Console_warn'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_warn'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_warn);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_warn'] = __NAMESPACE__ . '\\Effect_Class_Console_warn';

// Effect_Class_Console_timeLog
function Effect_Class_Console_timeLog($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_timeLog';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_timeLog = ($GLOBALS['Effect_Console_timeLog'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_timeLog'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_timeLog);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_timeLog'] = __NAMESPACE__ . '\\Effect_Class_Console_timeLog';

// Effect_Class_Console_timeEnd
function Effect_Class_Console_timeEnd($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_timeEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_timeEnd = ($GLOBALS['Effect_Console_timeEnd'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_timeEnd'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_timeEnd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_timeEnd'] = __NAMESPACE__ . '\\Effect_Class_Console_timeEnd';

// Effect_Class_Console_time
function Effect_Class_Console_time($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_time';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_time = ($GLOBALS['Effect_Console_time'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_time'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_time);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_time'] = __NAMESPACE__ . '\\Effect_Class_Console_time';

// Effect_Class_Console_logShow
function Effect_Class_Console_logShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_logShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_logShow = ($GLOBALS['Effect_Console_logShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_logShow'));
  $liftEffect = ($dictMonadEffect)->liftEffect;
  $__res = function($dictShow) use ($__global_Effect_Class_Console_compose, $liftEffect, $__global_Effect_Console_logShow) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Class_Console_compose)($liftEffect, ($__global_Effect_Console_logShow)($dictShow));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_logShow'] = __NAMESPACE__ . '\\Effect_Class_Console_logShow';

// Effect_Class_Console_log
function Effect_Class_Console_log($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_log';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_log = ($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_log);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_log'] = __NAMESPACE__ . '\\Effect_Class_Console_log';

// Effect_Class_Console_infoShow
function Effect_Class_Console_infoShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_infoShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_infoShow = ($GLOBALS['Effect_Console_infoShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_infoShow'));
  $liftEffect = ($dictMonadEffect)->liftEffect;
  $__res = function($dictShow) use ($__global_Effect_Class_Console_compose, $liftEffect, $__global_Effect_Console_infoShow) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Class_Console_compose)($liftEffect, ($__global_Effect_Console_infoShow)($dictShow));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_infoShow'] = __NAMESPACE__ . '\\Effect_Class_Console_infoShow';

// Effect_Class_Console_info
function Effect_Class_Console_info($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_info';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_info = ($GLOBALS['Effect_Console_info'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_info'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_info);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_info'] = __NAMESPACE__ . '\\Effect_Class_Console_info';

// Effect_Class_Console_groupEnd
function Effect_Class_Console_groupEnd($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_groupEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Console_groupEnd = ($GLOBALS['Effect_Console_groupEnd'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_groupEnd'));
  $__res = (($dictMonadEffect)->liftEffect)($__global_Effect_Console_groupEnd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_groupEnd'] = __NAMESPACE__ . '\\Effect_Class_Console_groupEnd';

// Effect_Class_Console_groupCollapsed
function Effect_Class_Console_groupCollapsed($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_groupCollapsed';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_groupCollapsed = ($GLOBALS['Effect_Console_groupCollapsed'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_groupCollapsed'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_groupCollapsed);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_groupCollapsed'] = __NAMESPACE__ . '\\Effect_Class_Console_groupCollapsed';

// Effect_Class_Console_group
function Effect_Class_Console_group($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_group = ($GLOBALS['Effect_Console_group'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_group'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_group);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_group'] = __NAMESPACE__ . '\\Effect_Class_Console_group';

// Effect_Class_Console_grouped
function Effect_Class_Console_grouped($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_grouped';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Class_Console_discard = ($GLOBALS['Effect_Class_Console_discard'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_discard'));
  $__global_Effect_Class_Console_group = ($GLOBALS['Effect_Class_Console_group'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_group'));
  $__global_Effect_Class_Console_groupEnd = ($GLOBALS['Effect_Class_Console_groupEnd'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_groupEnd'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
  $discard1 = ($__global_Effect_Class_Console_discard)($Bind1);
  $group1 = ($__global_Effect_Class_Console_group)($dictMonadEffect);
  $bind = ($Bind1)->bind;
  $groupEnd1 = ($__global_Effect_Class_Console_groupEnd)($dictMonadEffect);
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($discard1, $group1, $bind, $groupEnd1, $pure, &$__fn) {
  $__fn = function($name, $inner = null) use ($discard1, $group1, $bind, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($inner) use ($name, &$__fn) { return $__fn($name, $inner); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($discard1)(($group1)($name), function($__dollar____unused) use ($bind, $inner, $discard1, $groupEnd1, $pure) {
  $__num = func_num_args();
  $__res = ($bind)($inner, function($result) use ($discard1, $groupEnd1, $pure) {
  $__num = func_num_args();
  $__res = ($discard1)($groupEnd1, function($__dollar____unused) use ($pure, $result) {
  $__num = func_num_args();
  $__res = ($pure)($result);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_grouped'] = __NAMESPACE__ . '\\Effect_Class_Console_grouped';

// Effect_Class_Console_errorShow
function Effect_Class_Console_errorShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_errorShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_errorShow = ($GLOBALS['Effect_Console_errorShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_errorShow'));
  $liftEffect = ($dictMonadEffect)->liftEffect;
  $__res = function($dictShow) use ($__global_Effect_Class_Console_compose, $liftEffect, $__global_Effect_Console_errorShow) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Class_Console_compose)($liftEffect, ($__global_Effect_Console_errorShow)($dictShow));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_errorShow'] = __NAMESPACE__ . '\\Effect_Class_Console_errorShow';

// Effect_Class_Console_error
function Effect_Class_Console_error($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_error';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_error = ($GLOBALS['Effect_Console_error'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_error'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_error);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_error'] = __NAMESPACE__ . '\\Effect_Class_Console_error';

// Effect_Class_Console_debugShow
function Effect_Class_Console_debugShow($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_debugShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_debugShow = ($GLOBALS['Effect_Console_debugShow'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_debugShow'));
  $liftEffect = ($dictMonadEffect)->liftEffect;
  $__res = function($dictShow) use ($__global_Effect_Class_Console_compose, $liftEffect, $__global_Effect_Console_debugShow) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Class_Console_compose)($liftEffect, ($__global_Effect_Console_debugShow)($dictShow));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_debugShow'] = __NAMESPACE__ . '\\Effect_Class_Console_debugShow';

// Effect_Class_Console_debug
function Effect_Class_Console_debug($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_debug';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Class_Console_compose = ($GLOBALS['Effect_Class_Console_compose'] ?? \Effect\Class\Console\phpurs_eval_thunk('Effect_Class_Console_compose'));
  $__global_Effect_Console_debug = ($GLOBALS['Effect_Console_debug'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_debug'));
  $__res = ($__global_Effect_Class_Console_compose)(($dictMonadEffect)->liftEffect, $__global_Effect_Console_debug);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_debug'] = __NAMESPACE__ . '\\Effect_Class_Console_debug';

// Effect_Class_Console_clear
function Effect_Class_Console_clear($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Class_Console_clear';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Console_clear = ($GLOBALS['Effect_Console_clear'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_clear'));
  $__res = (($dictMonadEffect)->liftEffect)($__global_Effect_Console_clear);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Class_Console_clear'] = __NAMESPACE__ . '\\Effect_Class_Console_clear';

