<?php
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
namespace usni\library\modules\install\views;

use usni\library\views\UiView;
use usni\UsniAdaptor;
/**
 * InstallWelcomeView class file.
 * @package usni\library\modules\install\views
 */
class InstallWelcomeView extends UiView
{
    /**
     * @inheritdoc
     */
    protected function renderContent()
    {
        return UsniAdaptor::app()->controller->renderPartial('@usni/themes/bootstrap/views/install/welcome', []);
    }
}
?>
