<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_89dbb8afbd8421ce219af7ea821a3a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getContext($context, "link")) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "icon"), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->getContext($context, "icon"), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->getContext($context, "text"), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  346 => 321,  343 => 320,  299 => 278,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  300 => 105,  297 => 277,  291 => 102,  274 => 97,  263 => 95,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  369 => 165,  348 => 322,  334 => 145,  293 => 118,  288 => 101,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  248 => 96,  243 => 92,  240 => 92,  221 => 85,  219 => 84,  202 => 77,  195 => 71,  150 => 55,  34 => 5,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  188 => 68,  170 => 84,  153 => 56,  385 => 160,  382 => 159,  376 => 169,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  327 => 114,  324 => 113,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 97,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  190 => 76,  185 => 74,  180 => 63,  174 => 65,  159 => 53,  148 => 46,  191 => 69,  178 => 66,  175 => 65,  172 => 62,  161 => 63,  134 => 47,  118 => 49,  113 => 38,  104 => 32,  100 => 24,  77 => 25,  97 => 23,  58 => 18,  127 => 60,  110 => 22,  90 => 37,  76 => 28,  124 => 49,  102 => 33,  65 => 11,  59 => 22,  23 => 4,  63 => 21,  81 => 23,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 118,  337 => 103,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 87,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 51,  140 => 42,  132 => 51,  128 => 49,  119 => 40,  107 => 27,  71 => 13,  38 => 6,  177 => 64,  165 => 60,  160 => 61,  135 => 62,  126 => 45,  114 => 42,  84 => 27,  70 => 26,  67 => 22,  61 => 23,  28 => 3,  93 => 38,  88 => 25,  78 => 18,  94 => 34,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 11,  87 => 32,  44 => 11,  31 => 8,  196 => 92,  183 => 70,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 59,  138 => 57,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 24,  49 => 11,  46 => 12,  26 => 3,  27 => 7,  21 => 2,  25 => 35,  24 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 27,  66 => 25,  55 => 15,  52 => 12,  50 => 15,  43 => 9,  41 => 8,  35 => 9,  32 => 4,  29 => 3,  209 => 79,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 25,  99 => 31,  95 => 39,  92 => 28,  86 => 28,  82 => 28,  80 => 29,  73 => 20,  64 => 24,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 10,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}