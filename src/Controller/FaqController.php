<?php

namespace App\Controller;

use App\Entity\Faq;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FaqController extends AbstractController
{
    /**
     * @Route("/faq", name="faq")
     */
    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $faq = new Faq();
        $faq->setQuestion('set Question');
        $faq->setAnswer('Set Answer');

        $form = $this->createFormBuilder($faq)
            ->add('question', TextType::class, array('label' => 'Question'))
            ->add('answer', TextType::class, array('label' => 'answer'))
            ->add('save', SubmitType::class, array('label' => 'PublishForm'))
            ->getForm();

        return $this->render('faq/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
