<?php

namespace OxidSolutionCatalysts\PayPal\Api\Model\Subscriptions;

use JsonSerializable;
use OxidSolutionCatalysts\PayPal\Api\Model\BaseModel;
use Webmozart\Assert\Assert;

/**
 * The name of the party.
 *
 * generated from:
 * customized_x_unsupported_4315_merchant.CommonComponentsSpecification-v1-schema-common_components-v3-schema-json-openapi-2.0-name.json
 */
class Name3 implements JsonSerializable
{
    use BaseModel;

    /**
     * When the party is a person, the party's full name.
     *
     * @var string | null
     * maxLength: 300
     */
    public $full_name;

    public function validate($from = null)
    {
        $within = isset($from) ? "within $from" : "";
        !isset($this->full_name) || Assert::maxLength(
            $this->full_name,
            300,
            "full_name in Name3 must have maxlength of 300 $within"
        );
    }

    private function map(array $data)
    {
        if (isset($data['full_name'])) {
            $this->full_name = $data['full_name'];
        }
    }

    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->map($data);
        }
    }
}
