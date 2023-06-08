<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property string $accountSid
 * @property string $id
 * @property string $name
 * @property string $description
 * @property bool $active
 * @property array[] $questions
 * @property string $url
 */
class InsightsQuestionnairesInstance extends InstanceResource {
    /**
     * Initialize the InsightsQuestionnairesInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $id Unique Questionnaire ID
     */
    public function __construct(Version $version, array $payload, string $id = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'id' => Values::array_get($payload, 'id'),
            'name' => Values::array_get($payload, 'name'),
            'description' => Values::array_get($payload, 'description'),
            'active' => Values::array_get($payload, 'active'),
            'questions' => Values::array_get($payload, 'questions'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['id' => $id ?: $this->properties['id'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return InsightsQuestionnairesContext Context for this
     *                                       InsightsQuestionnairesInstance
     */
    protected function proxy(): InsightsQuestionnairesContext {
        if (!$this->context) {
            $this->context = new InsightsQuestionnairesContext($this->version, $this->solution['id']);
        }

        return $this->context;
    }

    /**
     * Update the InsightsQuestionnairesInstance
     *
     * @param bool $active Is questionnaire enabled ?
     * @param array|Options $options Optional Arguments
     * @return InsightsQuestionnairesInstance Updated InsightsQuestionnairesInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(bool $active, array $options = []): InsightsQuestionnairesInstance {
        return $this->proxy()->update($active, $options);
    }

    /**
     * Delete the InsightsQuestionnairesInstance
     *
     * @param array|Options $options Optional Arguments
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(array $options = []): bool {
        return $this->proxy()->delete($options);
    }

    /**
     * Fetch the InsightsQuestionnairesInstance
     *
     * @param array|Options $options Optional Arguments
     * @return InsightsQuestionnairesInstance Fetched InsightsQuestionnairesInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): InsightsQuestionnairesInstance {
        return $this->proxy()->fetch($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.FlexApi.V1.InsightsQuestionnairesInstance ' . \implode(' ', $context) . ']';
    }
}