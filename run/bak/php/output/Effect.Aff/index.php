<?php

namespace Effect\Aff;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';

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
      case 'Effect_Aff_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Effect_Aff_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Effect_Aff_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Effect_Aff_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Effect_Aff_void': $v = \Data\Functor\Data_Functor_void(($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect'))); break;
      case 'Effect_Aff_launchAff_': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void')), "\\Effect\\Aff\\Effect_Aff_launchAff"); break;
      case 'Effect_Aff_functorAff': $v = (object)["map" => ($GLOBALS['Effect_Aff__map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__map'))]; break;
      case 'Effect_Aff_monadAff': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_applicativeAff = ($GLOBALS['Effect_Aff_applicativeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeAff'));
  $__res = $__global_Effect_Aff_applicativeAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_bindAff = ($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'));
  $__res = $__global_Effect_Aff_bindAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_bindAff': $v = (object)["bind" => ($GLOBALS['Effect_Aff__bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__bind')), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_applyAff = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  $__res = $__global_Effect_Aff_applyAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_applicativeAff': $v = (object)["pure" => ($GLOBALS['Effect_Aff__pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__pure')), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_applyAff = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  $__res = $__global_Effect_Aff_applyAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_applyAff': $v = (object)["apply" => \Control\Monad\Control_Monad_ap(($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'))), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_functorAff = ($GLOBALS['Effect_Aff_functorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorAff'));
  $__res = $__global_Effect_Aff_functorAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_monadEffectAff': $v = (object)["liftEffect" => ($GLOBALS['Effect_Aff__liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__liftEffect')), "Monad0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_monadAff = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
  $__res = $__global_Effect_Aff_monadAff;
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
$ffi_Effect_Aff = \call_user_func(function() {
$_pure = function($x) use (&$_pure) { return function() use(&$x) { return $x; }; };
$_map = function($f, $aff = null) use (&$_map) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_map) {
            return $_map(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$aff) { return $f($aff()); };
};
$_bind = function($aff, $f = null) use (&$_bind) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_bind) {
            return $_bind(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff, &$f) { return $f($aff())(); };
};
$_liftEffect = function($eff) use (&$_liftEffect) { return $eff; };
$_makeFiber = function($isLeft, $fromLeft, $fromRight, $left, $right, $aff = null) use (&$_makeFiber) { 
    if (func_num_args() < 6) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_makeFiber) {
            return $_makeFiber(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff) { 
        $fiber = new \Fiber($aff); 
        $fiber->start(); 
        return (object)['run' => function() {}, 'join' => function($k) { return function() { return function(){}; }; }]; 
    }; 
};
$_fork = function($immediate, $aff = null) use (&$_fork) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_fork) {
            return $_fork(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff) { 
        $fiber = new \Fiber($aff); 
        \Revolt\EventLoop::queue(function() use(&$fiber) { $fiber->start(); }); 
        return (object)['run' => function() {}, 'join' => function($k){ return function(){ return function(){}; }; }]; 
    };
};
$_delay = function($right, $ms) use (&$_delay) { 
    return function() use(&$right, &$ms) { 
        $fiber = \Fiber::getCurrent(); 
        \Revolt\EventLoop::delay($ms / 1000, function() use(&$fiber, &$right) { 
            if ($fiber) $fiber->resume(); 
        }); 
        if ($fiber) \Fiber::suspend(); 
        return $right(null); 
    }; 
};
$_makeSupervisedFiber = $_makeFiber;
$_killAll = function($err, $sup, $cb) use (&$_killAll) { return function() { return function(){}; }; };

$_makeAff = function($isLeft, $fromLeft, $fromRight, $left, $right, $k = null) use (&$_makeAff) { 
    if (func_num_args() < 6) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_makeAff) {
            return $_makeAff(...array_merge($__args, $more));
        };
    }
    return function() use(&$isLeft, &$fromLeft, &$fromRight, &$k) { 
        $fiber = \Fiber::getCurrent(); 
        $isDone = false;
        $result = null;
        $exception = null;

        $canceler = $k(function($res) use(&$isLeft, &$fromLeft, &$fromRight, &$fiber, &$isDone, &$result, &$exception) { 
            return function() use(&$isLeft, &$fromLeft, &$fromRight, &$fiber, &$isDone, &$result, &$exception, &$res) { 
                $isDone = true;
                if ($isLeft($res)) {
                    $exception = $fromLeft($res);
                } else {
                    $result = $fromRight($res);
                }
                
                if ($fiber && $fiber->isSuspended()) { 
                    if ($exception !== null) {
                        \Revolt\EventLoop::queue(function() use($fiber, $exception) {
                            if ($fiber->isSuspended()) $fiber->throw($exception); 
                        });
                    } else {
                        \Revolt\EventLoop::queue(function() use($fiber, $result) {
                            if ($fiber->isSuspended()) $fiber->resume($result); 
                        });
                    }
                } 
            }; 
        })(); 
        
        if (!$isDone) {
            if ($fiber) {
                return \Fiber::suspend(); 
            } else {
                throw new \RuntimeException("makeAff used outside of a fiber");
            }
        } else {
            if ($exception !== null) throw $exception;
            return $result;
        }
    }; 
};

$_throwError = function($err) use (&$_throwError) { return function() use(&$err) { throw $err; }; };
$_catchError = function($aff, $f = null) use (&$_catchError) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_catchError) {
            return $_catchError(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff, &$f) { try { return $aff(); } catch (\Throwable $e) { return $f($e)(); } };
};
$generalBracket = function($acq, $cond = null, $use = null) use (&$generalBracket) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$generalBracket) {
            return $generalBracket(...array_merge($__args, $more));
        };
    }
    return function() use(&$acq, &$use) { $res = $acq(); return $use($res)(); }; 
};
$_parAffMap = $_map;

$_parAffApply = function($aff1, $aff2 = null) use (&$_parAffApply) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_parAffApply) {
            return $_parAffApply(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff1, &$aff2) { 
        $parent = \Fiber::getCurrent();
        $isDone = false; 
        $completed = 0;
        $res1 = null;
        $res2 = null;
        $error = null;

        $f1 = new \Fiber(function() use(&$aff1, &$isDone, &$completed, &$res1, &$error, $parent) {
            try {
                $res1 = $aff1();
                if (!$isDone) {
                    $completed++;
                    if ($completed === 2) {
                        $isDone = true;
                        if ($parent && $parent->isSuspended()) {
                            \Revolt\EventLoop::queue(function() use($parent) {
                                if ($parent->isSuspended()) $parent->resume();
                            });
                        }
                    }
                }
            } catch (\Throwable $e) {
                if (!$isDone) {
                    $isDone = true;
                    $error = $e;
                    if ($parent && $parent->isSuspended()) {
                        \Revolt\EventLoop::queue(function() use($parent, $e) {
                            if ($parent->isSuspended()) $parent->throw($e);
                        });
                    }
                }
            }
        });

        $f2 = new \Fiber(function() use(&$aff2, &$isDone, &$completed, &$res2, &$error, $parent) {
            try {
                $res2 = $aff2();
                if (!$isDone) {
                    $completed++;
                    if ($completed === 2) {
                        $isDone = true;
                        if ($parent && $parent->isSuspended()) {
                            \Revolt\EventLoop::queue(function() use($parent) {
                                if ($parent->isSuspended()) $parent->resume();
                            });
                        }
                    }
                }
            } catch (\Throwable $e) {
                if (!$isDone) {
                    $isDone = true;
                    $error = $e;
                    if ($parent && $parent->isSuspended()) {
                        \Revolt\EventLoop::queue(function() use($parent, $e) {
                            if ($parent->isSuspended()) $parent->throw($e);
                        });
                    }
                }
            }
        });

        \Revolt\EventLoop::queue(function() use($f1) { $f1->start(); });
        \Revolt\EventLoop::queue(function() use($f2) { $f2->start(); });

        if (!$isDone) {
            \Fiber::suspend();
        }
        
        if ($error !== null) throw $error;
        return $res1($res2); 
    };
};

$_sequential = function($aff) use (&$_sequential) { return $aff; };

$_parAffAlt = function($aff1, $aff2 = null) use (&$_parAffAlt) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_parAffAlt) {
            return $_parAffAlt(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff1, &$aff2) { 
        $parent = \Fiber::getCurrent();
        $isDone = false;
        $result = null;
        $doneCount = 0;
        $error2 = null;

        $f1 = new \Fiber(function() use(&$aff1, &$isDone, &$result, &$doneCount, &$error2, $parent) {
            try {
                $res = $aff1();
                if (!$isDone) {
                    $isDone = true;
                    $result = $res;
                    if ($parent && $parent->isSuspended()) {
                        \Revolt\EventLoop::queue(function() use($parent, $result) {
                            if ($parent->isSuspended()) $parent->resume($result);
                        });
                    }
                }
            } catch (\Throwable $e) {
                $doneCount++;
                if ($doneCount === 2 && !$isDone) {
                    $isDone = true;
                    if ($parent && $parent->isSuspended()) {
                        \Revolt\EventLoop::queue(function() use($parent, $error2) {
                            if ($parent->isSuspended()) $parent->throw($error2); 
                        });
                    }
                }
            }
        });

        $f2 = new \Fiber(function() use(&$aff2, &$isDone, &$result, &$doneCount, &$error2, $parent) {
            try {
                $res = $aff2();
                if (!$isDone) {
                    $isDone = true;
                    $result = $res;
                    if ($parent && $parent->isSuspended()) {
                        \Revolt\EventLoop::queue(function() use($parent, $result) {
                            if ($parent->isSuspended()) $parent->resume($result);
                        });
                    }
                }
            } catch (\Throwable $e) {
                $error2 = $e;
                $doneCount++;
                if ($doneCount === 2 && !$isDone) {
                    $isDone = true;
                    if ($parent && $parent->isSuspended()) {
                        \Revolt\EventLoop::queue(function() use($parent, $error2) {
                            if ($parent->isSuspended()) $parent->throw($error2);
                        });
                    }
                }
            }
        });

        \Revolt\EventLoop::queue(function() use($f1) { $f1->start(); });
        \Revolt\EventLoop::queue(function() use($f2) { $f2->start(); });

        if (!$isDone) {
            return \Fiber::suspend();
        } else {
            if ($doneCount === 2) throw $error2;
            return $result;
        }
    };
};

$exports['_pure'] = $_pure;
$exports['_map'] = $_map;
$exports['_bind'] = $_bind;
$exports['_liftEffect'] = $_liftEffect;
$exports['_makeFiber'] = $_makeFiber;
$exports['_fork'] = $_fork;
$exports['_delay'] = $_delay;
$exports['_makeSupervisedFiber'] = $_makeSupervisedFiber;
$exports['_killAll'] = $_killAll;
$exports['_makeAff'] = $_makeAff;
$exports['_throwError'] = $_throwError;
$exports['_catchError'] = $_catchError;
$exports['generalBracket'] = $generalBracket;
$exports['_parAffMap'] = $_parAffMap;
$exports['_parAffApply'] = $_parAffApply;
$exports['_sequential'] = $_sequential;
$exports['_parAffAlt'] = $_parAffAlt;
return $exports;
});
$GLOBALS['Effect_Aff__pure'] = $ffi_Effect_Aff['_pure'] ?? null;
$GLOBALS['Effect_Aff__throwError'] = $ffi_Effect_Aff['_throwError'] ?? null;
$GLOBALS['Effect_Aff__catchError'] = $ffi_Effect_Aff['_catchError'] ?? null;
$GLOBALS['Effect_Aff__fork'] = $ffi_Effect_Aff['_fork'] ?? null;
$GLOBALS['Effect_Aff__map'] = $ffi_Effect_Aff['_map'] ?? null;
$GLOBALS['Effect_Aff__bind'] = $ffi_Effect_Aff['_bind'] ?? null;
$GLOBALS['Effect_Aff__delay'] = $ffi_Effect_Aff['_delay'] ?? null;
$GLOBALS['Effect_Aff__liftEffect'] = $ffi_Effect_Aff['_liftEffect'] ?? null;
$GLOBALS['Effect_Aff__parAffMap'] = $ffi_Effect_Aff['_parAffMap'] ?? null;
$GLOBALS['Effect_Aff__parAffApply'] = $ffi_Effect_Aff['_parAffApply'] ?? null;
$GLOBALS['Effect_Aff__parAffAlt'] = $ffi_Effect_Aff['_parAffAlt'] ?? null;
$GLOBALS['Effect_Aff__makeFiber'] = $ffi_Effect_Aff['_makeFiber'] ?? null;
$GLOBALS['Effect_Aff__makeSupervisedFiber'] = $ffi_Effect_Aff['_makeSupervisedFiber'] ?? null;
$GLOBALS['Effect_Aff__killAll'] = $ffi_Effect_Aff['_killAll'] ?? null;
$GLOBALS['Effect_Aff__sequential'] = $ffi_Effect_Aff['_sequential'] ?? null;
$GLOBALS['Effect_Aff_generalBracket'] = $ffi_Effect_Aff['generalBracket'] ?? null;
$GLOBALS['Effect_Aff__makeAff'] = $ffi_Effect_Aff['_makeAff'] ?? null;







// Effect_Aff_unsafeFromRight
function Effect_Aff_unsafeFromRight($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_unsafeFromRight';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Right":
$a = ($__case_0)->v0;
$__res = $a;
goto __end;;
break;
case "Left":
$__res = ($__global_Partial_Unsafe_unsafeCrashWith)("unsafeFromRight: Left");
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_unsafeFromRight'] = __NAMESPACE__ . '\\Effect_Aff_unsafeFromRight';

// Effect_Aff_unsafeFromLeft
function Effect_Aff_unsafeFromLeft($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_unsafeFromLeft';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
$__res = $a;
goto __end;;
break;
case "Right":
$__res = ($__global_Partial_Unsafe_unsafeCrashWith)("unsafeFromLeft: Right");
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_unsafeFromLeft'] = __NAMESPACE__ . '\\Effect_Aff_unsafeFromLeft';

// Effect_Aff_isLeft
function Effect_Aff_isLeft($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_isLeft';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Left":
$__res = true;
goto __end;;
break;
case "Right":
$__res = false;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_isLeft'] = __NAMESPACE__ . '\\Effect_Aff_isLeft';

// Effect_Aff_makeFiber
function Effect_Aff_makeFiber($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_makeFiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn6 = ($GLOBALS['Data_Function_Uncurried_runFn6'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn6'));
  $__global_Effect_Aff__makeFiber = ($GLOBALS['Effect_Aff__makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__makeFiber'));
  $__global_Effect_Aff_isLeft = ($GLOBALS['Effect_Aff_isLeft'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_isLeft'));
  $__global_Effect_Aff_unsafeFromLeft = ($GLOBALS['Effect_Aff_unsafeFromLeft'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_unsafeFromLeft'));
  $__global_Effect_Aff_unsafeFromRight = ($GLOBALS['Effect_Aff_unsafeFromRight'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_unsafeFromRight'));
  $__res = ($__global_Data_Function_Uncurried_runFn6)($__global_Effect_Aff__makeFiber, $__global_Effect_Aff_isLeft, $__global_Effect_Aff_unsafeFromLeft, $__global_Effect_Aff_unsafeFromRight, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $aff);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_makeFiber'] = __NAMESPACE__ . '\\Effect_Aff_makeFiber';

// Effect_Aff_launchAff
function Effect_Aff_launchAff($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_launchAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Aff_bind = ($GLOBALS['Effect_Aff_bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bind'));
  $__global_Effect_Aff_makeFiber = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber'));
  $__global_Effect_Aff_discard = ($GLOBALS['Effect_Aff_discard'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_discard'));
  $__global_Effect_Aff_pure = ($GLOBALS['Effect_Aff_pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_pure'));
  $__res = ($__global_Effect_Aff_bind)(($__global_Effect_Aff_makeFiber)($aff), function($fiber) use ($__global_Effect_Aff_discard, $__global_Effect_Aff_pure) {
  $__num = func_num_args();
  $__case_0 = $fiber;
  $__case_res_0 = null;
  if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
  $__res = ($__global_Effect_Aff_discard)($__case_res_0, function($__dollar____unused) use ($__global_Effect_Aff_pure, $fiber) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Aff_pure)($fiber);
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
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_launchAff'] = __NAMESPACE__ . '\\Effect_Aff_launchAff';



// Effect_Aff_delay
function Effect_Aff_delay($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_delay';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Effect_Aff__delay = ($GLOBALS['Effect_Aff__delay'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__delay'));
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Effect_Aff__delay, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $n);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_delay'] = __NAMESPACE__ . '\\Effect_Aff_delay';






