<?php

namespace WonderWp\Component\Notification;

use PHPUnit\Framework\TestCase;

class AdminNotificationTest extends TestCase
{

    public function testGetMarkupSuccessShouldBuildNotif()
    {
        $notification = new AdminNotification('success','testMessage');
        $mk = $notification->getMarkup();
        $this->assertNotEmpty($mk);
    }

    public function testGetMarkupDismissibleShouldBeDismissible()
    {
        $notification = new AdminNotification('success','testMessage');
        $notification->setDismissible(true);
        $mk = $notification->getMarkup();
        $this->assertTrue(stripos($mk,'is-dismissible')!==false);
    }

    public function testToStringShouldEqualsGetMarkup(){
        $notification = new AdminNotification('success','testMessage');
        $mk = $notification->getMarkup();
        $mk2 = $notification->__toString();
        $this->assertEquals($mk,$mk2);
    }
}
