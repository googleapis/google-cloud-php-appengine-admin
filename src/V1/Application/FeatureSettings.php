<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/application.proto

namespace Google\Cloud\AppEngine\V1\Application;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The feature specific settings to be used in the application. These define
 * behaviors that are user configurable.
 *
 * Generated from protobuf message <code>google.appengine.v1.Application.FeatureSettings</code>
 */
class FeatureSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Boolean value indicating if split health checks should be used instead
     * of the legacy health checks. At an app.yaml level, this means defaulting
     * to 'readiness_check' and 'liveness_check' values instead of
     * 'health_check' ones. Once the legacy 'health_check' behavior is
     * deprecated, and this value is always true, this setting can
     * be removed.
     *
     * Generated from protobuf field <code>bool split_health_checks = 1;</code>
     */
    protected $split_health_checks = false;
    /**
     * If true, use [Container-Optimized OS](https://cloud.google.com/container-optimized-os/)
     * base image for VMs, rather than a base Debian image.
     *
     * Generated from protobuf field <code>bool use_container_optimized_os = 2;</code>
     */
    protected $use_container_optimized_os = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $split_health_checks
     *           Boolean value indicating if split health checks should be used instead
     *           of the legacy health checks. At an app.yaml level, this means defaulting
     *           to 'readiness_check' and 'liveness_check' values instead of
     *           'health_check' ones. Once the legacy 'health_check' behavior is
     *           deprecated, and this value is always true, this setting can
     *           be removed.
     *     @type bool $use_container_optimized_os
     *           If true, use [Container-Optimized OS](https://cloud.google.com/container-optimized-os/)
     *           base image for VMs, rather than a base Debian image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Boolean value indicating if split health checks should be used instead
     * of the legacy health checks. At an app.yaml level, this means defaulting
     * to 'readiness_check' and 'liveness_check' values instead of
     * 'health_check' ones. Once the legacy 'health_check' behavior is
     * deprecated, and this value is always true, this setting can
     * be removed.
     *
     * Generated from protobuf field <code>bool split_health_checks = 1;</code>
     * @return bool
     */
    public function getSplitHealthChecks()
    {
        return $this->split_health_checks;
    }

    /**
     * Boolean value indicating if split health checks should be used instead
     * of the legacy health checks. At an app.yaml level, this means defaulting
     * to 'readiness_check' and 'liveness_check' values instead of
     * 'health_check' ones. Once the legacy 'health_check' behavior is
     * deprecated, and this value is always true, this setting can
     * be removed.
     *
     * Generated from protobuf field <code>bool split_health_checks = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSplitHealthChecks($var)
    {
        GPBUtil::checkBool($var);
        $this->split_health_checks = $var;

        return $this;
    }

    /**
     * If true, use [Container-Optimized OS](https://cloud.google.com/container-optimized-os/)
     * base image for VMs, rather than a base Debian image.
     *
     * Generated from protobuf field <code>bool use_container_optimized_os = 2;</code>
     * @return bool
     */
    public function getUseContainerOptimizedOs()
    {
        return $this->use_container_optimized_os;
    }

    /**
     * If true, use [Container-Optimized OS](https://cloud.google.com/container-optimized-os/)
     * base image for VMs, rather than a base Debian image.
     *
     * Generated from protobuf field <code>bool use_container_optimized_os = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseContainerOptimizedOs($var)
    {
        GPBUtil::checkBool($var);
        $this->use_container_optimized_os = $var;

        return $this;
    }

}


