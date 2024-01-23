<?php


namespace oksihu\SzamlazzHu\Client\Errors;


use Illuminate\Contracts\Validation\Validator;
use oksihu\SzamlazzHu\Internal\AbstractInvoice;
use oksihu\SzamlazzHu\Internal\AbstractModel;
use oksihu\SzamlazzHu\Invoice;
use Throwable;

class InvoiceValidationException extends ModelValidationException
{

    /**
     * InvoiceValidationException constructor.
     * @param AbstractInvoice $model
     * @param Validator $validator
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(AbstractInvoice $model, Validator $validator, string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($model, $validator, $message, $code, $previous);
    }


    /**
     * @return Invoice|AbstractModel
     */
    public function getInvoice()
    {
        return $this->model;
    }

}
