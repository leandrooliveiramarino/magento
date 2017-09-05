<?php

namespace Foggyline\Office\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $departmentFactory;
    protected $employeeFactory;

    public function __construct(
        \Foggyline\Office\Model\DepartmentFactory $departmentFactory,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory
    )
    {
        $this->departmentFactory = $departmentFactory;
        $this->employeeFactory = $employeeFactory;
    }

    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    )
    {
        $setup->startSetup();

        $salesDepartment = $this->departmentFactory->create();
        $salesDepartment->setName('Sales');
        $salesDepartment->save();

        // $employee = $this->employeeFactory->create();
        // $employee->setDepartmentId($salesDepartment->getId())
        //     ->setEmail('john@sales.loc')
        //     ->setFirstName('John')
        //     ->setLastName('Doe')
        //     ->setServiceYears(3)
        //     ->setDob('1983-03-28')
        //     ->setSalary(3800.00)
        //     ->setVatNumber('GB123456789')
        //     ->setNote('Just some notes about John')
        //     ->save();

        $setup->endSetup();
    }
}
