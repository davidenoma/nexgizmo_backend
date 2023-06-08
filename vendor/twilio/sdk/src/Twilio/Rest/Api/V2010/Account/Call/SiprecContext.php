<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class SiprecContext extends InstanceContext {
    /**
     * Initialize the SiprecContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created this resource
     * @param string $callSid The SID of the Call the resource is associated with
     * @param string $sid The SID of the Siprec resource, or the `name`
     */
    public function __construct(Version $version, $accountSid, $callSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid, 'sid' => $sid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/' . \rawurlencode($callSid) . '/Siprec/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Update the SiprecInstance
     *
     * @param string $status The status. Must have the value `stopped`
     * @return SiprecInstance Updated SiprecInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $status): SiprecInstance {
        $data = Values::of(['Status' => $status, ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SiprecInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['callSid'],
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.SiprecContext ' . \implode(' ', $context) . ']';
    }
}