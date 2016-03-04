<?php
  namespace NewNamespace;
  namespace NewNamespace\Sub\Level;
  namespace NewNamespace\Blog;
  namespace bruce;
  
  class Funda
  {
   public function output()
   {
       echo 'Hello World  output';
   }
  }
  
  
  // following is part of the NewNamespace\Blog namespace
  class Article
  {

  }
  
  namespace NewNamespace\Store;
  
  // following definitions are now part of NewNamespace\Store
  class Article
  {

  }
  
  ?>
  
  <?php 
    
    namespace ExampleNamespace;

    /* Unqualified name */
	$foo = new foo(); // resolves to class ExampleNamespace\foo

	/* Qualified name */
	$foo = new subnamespace\foo(); // resolves to class ExampleNamespace\subnamespace\foo
		                              
	/* Fully qualified name */
	$foo = new ExampleNamespace\foo(); // resolves to class ExampleNamespace\foo
	  
  
  ?>
