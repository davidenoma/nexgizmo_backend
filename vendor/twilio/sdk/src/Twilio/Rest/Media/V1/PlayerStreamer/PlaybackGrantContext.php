<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Media\V1\PlayerStreamer;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class PlaybackGrantContext extends InstanceContext {
    /**
     * Initialize the PlaybackGrantContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID that identifies the resource to fetch
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid, ];

        $this->uri = '/PlayerStreamers/' . \rawurlencode($sid) . '/PlaybackGrant';
    }

    /**
     * Create the PlaybackGrantInstance
     *
     * @param array|Options $options Optional Arguments
     * @return PlaybackGrantInstance Created PlaybackGrantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []): PlaybackGrantInstance {
        $options = new Values($options);

        $data = Values::of([
            'Ttl' => $options['ttl'],
            'AccessControlAllowOrigin' => $options['accessControlAllowOrigin'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new PlaybackGrantInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Fetch the PlaybackGrantInstance
     *
     * @return PlaybackGrantInstance Fetched PlaybackGrantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): PlaybackGrantInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new PlaybackGrantInstance($this->version, $payload, $this->solution['sid']);
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
        return '[Twilio.Media.V1.PlaybackGrantContext ' . \implode(' ', $context) . ']';
    }
}