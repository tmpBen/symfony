<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2fb7bb1f526bc71b49266bbe5dfc0620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => $this->getContext($context, "token"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  188 => 90,  170 => 84,  153 => 77,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  327 => 140,  324 => 139,  317 => 135,  311 => 131,  308 => 130,  303 => 128,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 107,  261 => 105,  255 => 103,  251 => 101,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 89,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 79,  206 => 77,  204 => 76,  190 => 68,  185 => 66,  180 => 63,  174 => 59,  159 => 53,  148 => 46,  191 => 67,  178 => 66,  175 => 65,  172 => 64,  161 => 63,  134 => 54,  118 => 49,  113 => 48,  104 => 37,  100 => 24,  77 => 25,  97 => 23,  58 => 25,  127 => 60,  110 => 22,  90 => 42,  76 => 34,  124 => 49,  102 => 40,  65 => 22,  59 => 13,  23 => 4,  63 => 19,  81 => 21,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 147,  337 => 103,  322 => 138,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 125,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 43,  140 => 42,  132 => 51,  128 => 49,  119 => 47,  107 => 27,  71 => 21,  38 => 7,  177 => 65,  165 => 83,  160 => 61,  135 => 62,  126 => 45,  114 => 42,  84 => 40,  70 => 15,  67 => 14,  61 => 12,  28 => 3,  93 => 6,  88 => 20,  78 => 26,  94 => 34,  89 => 20,  85 => 32,  75 => 23,  68 => 30,  56 => 11,  87 => 41,  44 => 20,  31 => 3,  196 => 92,  183 => 70,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 58,  151 => 47,  142 => 59,  138 => 57,  136 => 71,  121 => 50,  117 => 19,  105 => 18,  91 => 34,  62 => 27,  49 => 14,  46 => 13,  26 => 9,  27 => 3,  21 => 2,  25 => 35,  24 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 21,  40 => 11,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 16,  55 => 24,  52 => 10,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 51,  147 => 75,  144 => 53,  141 => 73,  133 => 55,  130 => 39,  125 => 51,  122 => 43,  116 => 57,  112 => 35,  109 => 52,  106 => 51,  103 => 25,  99 => 8,  95 => 34,  92 => 43,  86 => 28,  82 => 19,  80 => 32,  73 => 33,  64 => 23,  60 => 20,  57 => 19,  54 => 10,  51 => 14,  48 => 9,  45 => 14,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
