commerce-shipstation
====================

ShipStation Integration for Drupal Commerce

This module provides integration between ShipStation (http://www.shipstation.com) and 
Drupal Commerce for purposes of order fulfillment. ShipStation integration is provided
via the ShipStation Custom Store service (https://app.shipstation.com/content/integration/ShipStationCustomStoreDevGuide.pdf).

The module supports the ability for ShipStation to retrieve orders from Drupal Commerce
based on order status. It also allows ShipStation to notify Drupal Commerce of orders
that have shipped, and provides a Rules event for triggering related actions.

In order to use this module, you must have a ShipStation account.

Requirements
===========

This module requires the following modules:
* Drupal Commerce
* Commerce Shipping (provided with Drupal Commerce)
* Rules
* at least one shipping method compatible with Commerce Shipping

Additionally, the following modules are recommended:
* Commerce Physical

Configuration
============

You can configure the module settings at admin/commerce/config/shipping/shipstation.

Usage
=====
The module creates an endpoint for ShipStation to communicate with at shipstation/api-endpoint. Follow the instructions
in the Custom Store Integration Guide to configure a custom store in ShipStation.
