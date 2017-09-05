<?php

namespace Foggyline\Office\Setup;

use Magento\Eav\Setup\EavSetup;

class EmployeeSetup extends EavSetup
{
    public function getDefaultEntities()
    {
        $employeeEntity = \Foggyline\Office\Model\Employee::ENTITY;
        $entities = [
            'foggyline_office_employee' => [
                'entity_model' => 'Foggyline\Office\Model\ResourceModel\Employee',
                'table' => 'foggyline_office_employee_entity',
                'attributes' => [
                    'department_id' => [
                        'type' => 'static',
                    ],
                    'email' => [
                        'type' => 'static',
                    ],
                    'first_name' => [
                        'type' => 'static',
                    ],
                    'last_name' => [
                        'type' => 'static',
                    ],
                ],
            ],
        ];
        return $entities;
    }
}
