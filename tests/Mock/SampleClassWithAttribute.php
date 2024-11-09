<?php declare(strict_types=1);

namespace Cxxi\ClientProviderBundle\Tests\Mock;

use Cxxi\ClientProviderBundle\Tests\TestConstants;

#[SampleValidAttribute(name: TestConstants::MY_VALID_ATTRIBUTE_NAME)]
#[SampleInvalidAttribute(name: TestConstants::MY_INVALID_ATTRIBUTE_NAME)]
class SampleClassWithAttribute {}