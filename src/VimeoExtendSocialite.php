<?php
namespace SocialiteProviders\Vimeo;

use SocialiteProviders\Manager\SocialiteWasCalled;

class VimeoExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'vimeo', __NAMESPACE__.'\Provider'
        );
    }
}
