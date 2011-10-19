<?php

namespace {{ namespace }}\Form{{ entity_namespace ? '\\' ~ entity_namespace : '' }};

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class {{ form_class }} extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
        {%- for label, field in fields %}

            ->add('{{ field }}', null, array(
                'label' => "{{ label|replace({'_': ' '})|capitalize }}"
            ))

        {%- endfor %}

        ;
    }

    public function getName()
    {
        return '{{ form_type_name }}';
    }
}
