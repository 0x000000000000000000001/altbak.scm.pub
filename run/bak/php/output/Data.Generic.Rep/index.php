<?php

namespace Data\Generic\Rep;

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
      case 'Data_Generic_Rep_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Generic_Rep_show': $v = ($GLOBALS['Data_Show_showStringImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showStringImpl')); break;
      case 'Data_Generic_Rep_NoArguments': $v = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")); break;
      case 'Data_Generic_Rep_showNoArguments': $v = (object)["show" => function($v) {
  $__num = \func_num_args();
  $__res = "NoArguments";
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


require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';



// Data_Generic_Rep_Inl
function majData_majGeneric_majRep_majInl($value0) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_majInl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Inl", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Inl'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_majInl';

// Data_Generic_Rep_Inr
function majData_majGeneric_majRep_majInr($value0) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_majInr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Inr", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Inr'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_majInr';

// Data_Generic_Rep_Product
function majData_majGeneric_majRep_majProduct($value0, $value1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_majProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Product'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_majProduct';

// Data_Generic_Rep_NoConstructors
function majData_majGeneric_majRep_majNomajConstructors($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_majNomajConstructors';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_NoConstructors'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_majNomajConstructors';


// Data_Generic_Rep_Generic$Dict
function majData_majGeneric_majRep_majGenericdollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_majGenericdollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_GenericdollarDict'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_majGenericdollarmajDict';

// Data_Generic_Rep_Constructor
function majData_majGeneric_majRep_majConstructor($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_majConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Constructor'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_majConstructor';

// Data_Generic_Rep_Argument
function majData_majGeneric_majRep_majArgument($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_majArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_Argument'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_majArgument';

// Data_Generic_Rep_to
function majData_majGeneric_majRep_to($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_to';
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
$__res = ($v)->to;
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
$GLOBALS['Data_Generic_Rep_to'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_to';

// Data_Generic_Rep_showSum
function majData_majGeneric_majRep_showmajSum($dictShow, $dictShow1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_showmajSum';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Generic_Rep_append = ($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append'));
  $show1 = ($dictShow)->show;
  $show2 = ($dictShow1)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Generic_Rep_append, $show1, $show2) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Generic_Rep_append)("(Inl "))((($__global_Data_Generic_Rep_append)(($show1)($a)))(")"));
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
case "Inr":
$b = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Generic_Rep_append)("(Inr "))((($__global_Data_Generic_Rep_append)(($show2)($b)))(")"));
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
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Generic_Rep_showSum'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_showmajSum';

// Data_Generic_Rep_showProduct
function majData_majGeneric_majRep_showmajProduct($dictShow, $dictShow1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_showmajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Generic_Rep_append = ($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append'));
  $show1 = ($dictShow)->show;
  $show2 = ($dictShow1)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Generic_Rep_append, $show1, $show2) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Generic_Rep_append)("(Product "))((($__global_Data_Generic_Rep_append)(($show1)($a)))((($__global_Data_Generic_Rep_append)(" "))((($__global_Data_Generic_Rep_append)(($show2)($b)))(")"))));
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
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Generic_Rep_showProduct'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_showmajProduct';


// Data_Generic_Rep_showConstructor
function majData_majGeneric_majRep_showmajConstructor($dictIsSymbol, $dictShow = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_showmajConstructor';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Generic_Rep_append = ($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append'));
  $__global_Data_Generic_Rep_show = ($GLOBALS['Data_Generic_Rep_show'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_show'));
  $reflectSymbol = ($dictIsSymbol)->reflectSymbol;
  $show1 = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Generic_Rep_append, $__global_Data_Generic_Rep_show, $reflectSymbol, $show1) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Generic_Rep_append)("(Constructor @"))((($__global_Data_Generic_Rep_append)(($__global_Data_Generic_Rep_show)(($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy"))))))((($__global_Data_Generic_Rep_append)(" "))((($__global_Data_Generic_Rep_append)(($show1)($a)))(")"))));
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
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Generic_Rep_showConstructor'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_showmajConstructor';

// Data_Generic_Rep_showArgument
function majData_majGeneric_majRep_showmajArgument($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_showmajArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Generic_Rep_append = ($GLOBALS['Data_Generic_Rep_append'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_append'));
  $show1 = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Generic_Rep_append, $show1) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Generic_Rep_append)("(Argument "))((($__global_Data_Generic_Rep_append)(($show1)($a)))(")"));
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
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Generic_Rep_showArgument'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_showmajArgument';

// Data_Generic_Rep_repOf
function majData_majGeneric_majRep_repmajOf($dictGeneric, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_repmajOf';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy"));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Generic_Rep_repOf'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_repmajOf';

// Data_Generic_Rep_from
function majData_majGeneric_majRep_from($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majGeneric_majRep_from';
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
$__res = ($v)->from;
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
$GLOBALS['Data_Generic_Rep_from'] = __NAMESPACE__ . '\\majData_majGeneric_majRep_from';

