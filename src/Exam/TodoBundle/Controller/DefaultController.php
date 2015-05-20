<?php

namespace Exam\TodoBundle\Controller;
use Exam\TodoBundle\Entity\Todo;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \DateTime;

class DefaultController extends Controller
{

	public function __construct()
{
  //  parent::__construct();
	//$repository = $this->getDoctrine()->getManager()->getRepository('ExamTodoBundle:Todo');
  //$todo = $repository->findAll();
 /*  foreach ($item as $key => $value) 
  		if($value.time < new DateTime("now")){
  			$repository ->remove($value);
			$repository ->flush();}*/
  	  }




    public function indexAction()
    {
    	$repository = $this
  ->getDoctrine()
  ->getManager()
  ->getRepository('ExamTodoBundle:Todo');
  $todo = $repository->findAll();
        return $this->render('ExamTodoBundle:Default:home.html.twig',array('todos' =>  $todo));
    }
     public function addAction()
    {	
    	$request = Request::createFromGlobals();
    	if(null !==$request->request->get('title')){
    	$etudiant= new Todo();
    	$etudiant->setTitle($request->request->get('title'));
    	$etudiant->setContent($request->request->get('content'));
    	$etudiant->setTime(new DateTime($request->request->get('ladate')));
    	
    	$em = $this->getDoctrine()->getManager();
$em->persist($etudiant);
$em->flush();
return $this->redirectToRoute('exam_todo_homepage');

}
        return $this->render('ExamTodoBundle:Default:add.html.twig');
    }
    public function detaillsAction($id)
    {
	$repository = $this
  ->getDoctrine()
  ->getManager()
  ->getRepository('ExamTodoBundle:Todo');
  $item = $repository->find($id);
        return $this->render('ExamTodoBundle:Default:detaills.html.twig',array('item' => $item));
    }

}
