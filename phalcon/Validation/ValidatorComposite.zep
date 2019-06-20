
/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Validation;

/**
 * Phalcon\Validation\CombinedFieldsValidator
 *
 * This is a base class for combined fields validators
 */
abstract class ValidatorComposite extends Validator implements ValidatorCompositeInterface
{
    /**
     * Executes the validation
     */
    public function validate(<Validation> validation, var field) -> bool
    {
        var validator;

        if unlikely count(this->getValidators()) === 0 {
            throw new Exception(get_class(this) . " does not have any validator added");
        }

        for validator in this->getValidators() {
            if validator->validate(validation, field) === false {
                return false;
            }
        }

        return true;
    }
}
