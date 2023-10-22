<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/NodeType.proto

namespace NodeType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a decision (CASE)
 *
 * Generated from protobuf message <code>NodeType.StmtDecisionCase</code>
 */
class StmtDecisionCase extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.NodeType.Stmts stmts = 1;</code>
     */
    protected $stmts = null;
    /**
     * Generated from protobuf field <code>.NodeType.StmtLocationInFile location = 2;</code>
     */
    protected $location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NodeType\Stmts $stmts
     *     @type \NodeType\StmtLocationInFile $location
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\NodeType::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.NodeType.Stmts stmts = 1;</code>
     * @return \NodeType\Stmts|null
     */
    public function getStmts()
    {
        return $this->stmts;
    }

    public function hasStmts()
    {
        return isset($this->stmts);
    }

    public function clearStmts()
    {
        unset($this->stmts);
    }

    /**
     * Generated from protobuf field <code>.NodeType.Stmts stmts = 1;</code>
     * @param \NodeType\Stmts $var
     * @return $this
     */
    public function setStmts($var)
    {
        GPBUtil::checkMessage($var, \NodeType\Stmts::class);
        $this->stmts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NodeType.StmtLocationInFile location = 2;</code>
     * @return \NodeType\StmtLocationInFile|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Generated from protobuf field <code>.NodeType.StmtLocationInFile location = 2;</code>
     * @param \NodeType\StmtLocationInFile $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \NodeType\StmtLocationInFile::class);
        $this->location = $var;

        return $this;
    }

}

