
#ifdef HAVE_CONFIG_H
#include "../../../ext_config.h"
#endif

#include <php.h>
#include "../../../php_ext.h"
#include "../../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"
#include "kernel/object.h"


/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
/**
 * Phalcon\Filter\Sanitize\Url
 *
 * Sanitizes a value url
 */
ZEPHIR_INIT_CLASS(Phalcon_Filter_Sanitize_Url) {

	ZEPHIR_REGISTER_CLASS(Phalcon\\Filter\\Sanitize, Url, phalcon, filter_sanitize_url, phalcon_filter_sanitize_url_method_entry, 0);

	return SUCCESS;

}

/**
 * @var mixed input The text to sanitize
 */
PHP_METHOD(Phalcon_Filter_Sanitize_Url, __invoke) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *input, input_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&input_sub);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &input);



	ZVAL_LONG(&_0, 518);
	ZEPHIR_RETURN_CALL_FUNCTION("filter_var", NULL, 227, input, &_0);
	zephir_check_call_status();
	RETURN_MM();

}

