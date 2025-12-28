<?php

namespace App\Form;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
                ->add('nome', TextType::class, [
                    'label' => 'Nome',
                    'required' => true,
                    'attr' => [
                        'autofocus' => true
                    ]
                ])
                ->add('email', EmailType::class, [
                    'label' => 'E-mail',
                    'required' => true
                ])
                ->add('agreeTerms', CheckboxType::class, [
                    'label' => 'Eu concordo com os termos de serviço',
                    'mapped' => false,
                    'constraints' => [
                        new IsTrue(message: 'You should agree to our terms.'),
                    ],
                ])
                ->add('plainPassword', RepeatedType::class, [
                    'mapped' => false,
                    'required' => true,
                    'options' => [
                        'attr' => [
                            'autocomplete' => 'new-password'
                        ]
                    ],
                    'type' => \Symfony\Component\Form\Extension\Core\Type\PasswordType::class,
                    'invalid_message' => 'A confirmação da senha não corresponde com a senha informada.',
                    'first_options' => [
                        'label' => 'Senha',
                        'constraints' => [
                            new NotBlank(message: 'Por favor, informe a senha'),
                            new Length(
                                min: 6,
                                minMessage: 'Sua senha deve ter no mínimo {{ limit }} caracteres',
                                max: 4096
                            ),
                            new \Symfony\Component\Validator\Constraints\PasswordStrength(),
                            new \Symfony\Component\Validator\Constraints\NotCompromisedPassword()
                        ]
                    ],
                    'second_options' => [
                        'label' => 'Confirmar senha'
                    ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
        ]);
    }
}
