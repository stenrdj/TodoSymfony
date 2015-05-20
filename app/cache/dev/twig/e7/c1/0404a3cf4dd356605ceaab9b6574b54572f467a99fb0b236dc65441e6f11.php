<?php

/* ExamTodoBundle:Default:detaills.html.twig */
class __TwigTemplate_e7c10404a3cf4dd356605ceaab9b6574b54572f467a99fb0b236dc65441e6f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ExamTodoBundle:Default:base.html.twig", "ExamTodoBundle:Default:detaills.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ExamTodoBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Detaills ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title", array()), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "content", array()), "html", null, true);
        echo "
    <br><br><br>
    <p> Avant le ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
  </div>

</div>
<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("exam_todo_homepage");
        echo "\" class=\"button\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "ExamTodoBundle:Default:detaills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  52 => 11,  47 => 9,  42 => 7,  39 => 6,  36 => 5,  29 => 2,  11 => 1,);
    }
}
