<?php

/* ExamTodoBundle:Default:add.html.twig */
class __TwigTemplate_0fb4954f8e630f12bf96ec6012c13220f57f414ced835adf694c023134af0d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ExamTodoBundle:Default:base.html.twig", "ExamTodoBundle:Default:add.html.twig", 1);
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
        echo " - Add ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>TODO.COM</h1>

<form method=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Ajouter une chose á faire :</label>
    <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrez un titre\" name=\"title\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Description de la chose á faire:</label>
    <textarea class=\"form-control\" rows=\"3\" name=\"content\"></textarea>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Faire au plus tard:</label>
    <input type=\"datetime\" id=\"exampleInputFile\" name=\"ladate\">
    <p class=\"help-block\">Date sous forme de : '0000-00-00 00:00:00'.</p>
  </div>
  
  <button type=\"submit\" class=\"btn btn-default\">valider</button>
  <a class=\"btn btn-default\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("exam_todo_homepage");
        echo "\">retour</a>
</form>

</form>
";
    }

    public function getTemplateName()
    {
        return "ExamTodoBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }
}
