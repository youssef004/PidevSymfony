<?php

namespace ProduitBundle\Controller;

use ProduitBundle\Entity\CategoryProduit;
use ProduitBundle\Entity\Produit;
use ProduitBundle\Entity\Promotion;
use ProduitBundle\ProduitBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ProduitBundle\Form\ProduitType;
use ProduitBundle\Form\CategoryProduitType;
use AnnonceBundle\Form\categorieType;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProduitController extends Controller
{
    public function affichageAction()
    {
        return $this->render('@Produit/Client/afficheProduit.html.twig');
    }

    public function affichage1Action()
    {
        return $this->render('@Produit/Admin/afficheProduitAdmin.html.twig');
    }

    public function createAction(Request $request)
    {
        $memebre = $this->container->get('security.token_storage')->getToken()->getUser();
        $produit = new Produit();
        $f = $this->createForm(ProduitType::class, $produit);
        $f = $f->handleRequest($request);
        if ($f->isValid()) {
            $produit->setDateProduit(date_create());
            $file = $request->files->get('produitbundle_produit')['imageName'];
            //var_dump($file);
            $uploads_directory = $this->getParameter('uploads_directory');

            $fileName = $file->getClientOriginalName();

            //var_dump($fileName);


            $file->move(
                $uploads_directory, $fileName
            );
            $produit->setPictureProduit($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            $produit = $this->getDoctrine()->getRepository(Produit::class)->findAll();
            return $this->redirectToRoute('showProd');
        }
        return $this->render('@Produit/Admin/ajouterProduit.html.twig', array('f' => $f->createView()));
        $this->addFlash("success", "projet creer avec succee");
    }

    public function showProduitAction()
    {
        $produits = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        return $this->render('@Produit/Admin/afficheProduitAdmin.html.twig', array('produits' => $produits));

    }
    public function showHistoryProduitAction()
    {
        $produits = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        return $this->render('@Produit/Admin/afficheHistoryProduitAdmin.html.twig', array('produits' => $produits));

    }

    public function deleteProdAction($IdProduit)
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository("ProduitBundle:Produit")->find($IdProduit);

        $em->remove($prod);
        $em->flush();
        return $this->redirectToRoute("showProd");
    }

    public function updateProdAction($IdProduit, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Produit::class)->find($IdProduit);
        $f = $this->createForm(ProduitType::class, $prod);

        $f = $f->handleRequest($request);
        if ($f->isValid()) {

            $file = $request->files->get('produitbundle_produit')['imageName'];
            //var_dump($file);
            $uploads_directory = $this->getParameter('uploads_directory');

            $fileName = $file->getClientOriginalName();

            //var_dump($fileName);


            $file->move(
                $uploads_directory, $fileName
            );
            $prod->setPictureProduit($fileName);
            $prod->setDateProduit(date_create());
            $em = $this->getDoctrine()->getManager();
            $em->persist($prod);
            $em->flush();
            return $this->redirectToRoute('showProd');
        }




        return $this->render('@Produit/Admin/modifierProduitAdmin.html.twig', array('f' => $f->createView()));
    }

    public function showProduitClientAction(Request $request)
    {  $produits = $this->getDoctrine()->getRepository(Produit::class)->findAll();


        return $this->render('@Produit/Admin/afficheProduitAdmin.html.twig', array('produits' => $produits ));

    }






    public function createCategAction(Request $request)
    {
        $Categ = new CategoryProduit();
        $f = $this->createForm(CategoryProduitType::class, $Categ);
        $f = $f->handleRequest($request);
        if ($f->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Categ);
            $em->flush();
            return $this->redirectToRoute('showCategProd');
        }
        return $this->render('@Produit/Admin/ajouterCategory.html.twig', array('f' => $f->createView()));
    }

    public function showCategoryProduitAction()
    {
        $produits = $this->getDoctrine()->getRepository(CategoryProduit::class)->findAll();

        return $this->render('@Produit/Admin/afficheCategoryProduitAdmin.html.twig', array('categorys' => $produits));
    }

    public function deleteCategProdAction($IdCategoryProd)
    {
        $em = $this->getDoctrine()->getManager();
        $categ = $em->getRepository("ProduitBundle:CategoryProduit")->find($IdCategoryProd);
        $em->remove($categ);
        $em->flush();

        return $this->redirectToRoute("showCategProd");
    }



}