<?php

declare(strict_types=1);

namespace WonderWp\Component\Notification\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WonderWp\Component\Notification\AdminNotification;

class AdminNotificationTest extends TestCase
{
    public function testGetMarkupSuccessShouldBuildNotif(): void
    {
        $notification = new AdminNotification('success', 'testMessage');
        $mk = $notification->getMarkup();
        $this->assertNotEmpty($mk);
    }

    public function testGetMarkupDismissibleShouldBeDismissible(): void
    {
        $notification = new AdminNotification('success', 'testMessage');
        $notification->setDismissible(true);
        $mk = $notification->getMarkup();
        $this->assertTrue(stripos($mk, 'is-dismissible') !== false);
    }

    public function testToStringShouldEqualsGetMarkup(): void
    {
        $notification = new AdminNotification('success', 'testMessage');
        $mk = $notification->getMarkup();
        $mk2 = $notification->__toString();
        $this->assertEquals($mk, $mk2);
    }
}
