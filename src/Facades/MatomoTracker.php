<?php

namespace Sanskritick\MatomoTracker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed doTrackDownload(string $actionUrl)
 * @method static mixed doTrackOutlink(string $actionUrl)
 * @method static mixed doTrackPageView(string $documentTitle)
 * @method static mixed doTrackEvent(string $category, string $action, string $name = false, $value = false)
 * @method static mixed doTrackContentImpression(string $contentName, string $contentPiece = 'Unknown', $contentTarget = false)
 * @method static mixed doTrackContentInteraction(string $interaction, string $contentName, string $contentPiece = 'Unknown', $contentTarget = false)
 * @method static void queuePageView(string $documentTitle)
 * @method static void queueEvent(string $category, string $action, $name = false, $value = false)
 * @method static void queueContentImpression(string $contentName, string $contentPiece = 'Unknown', $contentTarget = false)
 * @method static void queueContentInteraction(string $interaction, string $contentName, string $contentPiece = 'Unknown', $contentTarget = false)
 * @method static void queueSiteSearch(string $keyword, string $category = '', $countResults = false)
 * @method static void queueGoal($idGoal, $revencue = 0.0)
 * @method static void queueDownload(string $actionUrl)
 * @method static void queueOutlink(string $actionUrl)
 * @method static void queueEcommerceCartUpdate(float $grandTotal)
 * @method static void queueEcommerceOrder(float $orderId, float $grandTotal, float $subTotal = 0.0, float $tax = 0.0, float $shipping = 0.0, float $discount = 0.0)
 * @method static void queueBulkTrack()
 */
class MatomoTracker extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'matomotracker';
    }
}
