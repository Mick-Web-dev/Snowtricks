<?php

namespace App\Controller\Admin;

use App\Entity\Tricks;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TricksCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tricks::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
