<?php

/* ExamTodoBundle:Default:base.html.twig */
class __TwigTemplate_851652617c74f61e019b231d27916577c8cf96cfe3d38bbeea111ab5e876bdfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  </head>
  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
       <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand active\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("exam_todo_homepage");
        echo "\">TODO</a>
        </div>

<div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li ><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("exam_todo_add");
        echo "\">ADD</a></li>

          </ul>
        </div>

      </div>
    </nav>

    <div class=\"container\">
 ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
    </div><!-- /.container -->
   
  </body>
</html>



 ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Todo";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"http://getbootstrap.com/examples/starter-template/starter-template.css\">\\
<link rel=\"stylesheet\" href=\"http://getbootstrap.com/examples/signin/signin.css\">
  ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "
   
 ";
    }

    public function getTemplateName()
    {
        return "ExamTodoBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  99 => 38,  92 => 8,  89 => 7,  83 => 6,  71 => 42,  69 => 38,  57 => 29,  49 => 24,  35 => 12,  33 => 7,  29 => 6,  22 => 1,);
    }
}
