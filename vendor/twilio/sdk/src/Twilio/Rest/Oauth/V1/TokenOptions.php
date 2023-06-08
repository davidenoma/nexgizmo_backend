<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Oauth\V1;

use Twilio\Options;
use Twilio\Values;

abstract class TokenOptions {
    /**
     * @param string $clientSecret The credential for confidential OAuth App
     * @param string $code Jwt token
     * @param string $codeVerifier The cryptographically generated code
     * @param string $deviceCode Jwt token
     * @param string $refreshToken Jwt token
     * @param string $deviceId An Id of device
     * @return CreateTokenOptions Options builder
     */
    public static function create(string $clientSecret = Values::NONE, string $code = Values::NONE, string $codeVerifier = Values::NONE, string $deviceCode = Values::NONE, string $refreshToken = Values::NONE, string $deviceId = Values::NONE): CreateTokenOptions {
        return new CreateTokenOptions($clientSecret, $code, $codeVerifier, $deviceCode, $refreshToken, $deviceId);
    }
}

class CreateTokenOptions extends Options {
    /**
     * @param string $clientSecret The credential for confidential OAuth App
     * @param string $code Jwt token
     * @param string $codeVerifier The cryptographically generated code
     * @param string $deviceCode Jwt token
     * @param string $refreshToken Jwt token
     * @param string $deviceId An Id of device
     */
    public function __construct(string $clientSecret = Values::NONE, string $code = Values::NONE, string $codeVerifier = Values::NONE, string $deviceCode = Values::NONE, string $refreshToken = Values::NONE, string $deviceId = Values::NONE) {
        $this->options['clientSecret'] = $clientSecret;
        $this->options['code'] = $code;
        $this->options['codeVerifier'] = $codeVerifier;
        $this->options['deviceCode'] = $deviceCode;
        $this->options['refreshToken'] = $refreshToken;
        $this->options['deviceId'] = $deviceId;
    }

    /**
     * The credential for confidential OAuth App.
     *
     * @param string $clientSecret The credential for confidential OAuth App
     * @return $this Fluent Builder
     */
    public function setClientSecret(string $clientSecret): self {
        $this->options['clientSecret'] = $clientSecret;
        return $this;
    }

    /**
     * JWT token related to the authorization code grant type.
     *
     * @param string $code Jwt token
     * @return $this Fluent Builder
     */
    public function setCode(string $code): self {
        $this->options['code'] = $code;
        return $this;
    }

    /**
     * A code which is generation cryptographically.
     *
     * @param string $codeVerifier The cryptographically generated code
     * @return $this Fluent Builder
     */
    public function setCodeVerifier(string $codeVerifier): self {
        $this->options['codeVerifier'] = $codeVerifier;
        return $this;
    }

    /**
     * JWT token related to the device code grant type.
     *
     * @param string $deviceCode Jwt token
     * @return $this Fluent Builder
     */
    public function setDeviceCode(string $deviceCode): self {
        $this->options['deviceCode'] = $deviceCode;
        return $this;
    }

    /**
     * JWT token related to the refresh token grant type.
     *
     * @param string $refreshToken Jwt token
     * @return $this Fluent Builder
     */
    public function setRefreshToken(string $refreshToken): self {
        $this->options['refreshToken'] = $refreshToken;
        return $this;
    }

    /**
     * The Id of the device associated with the token (refresh token).
     *
     * @param string $deviceId An Id of device
     * @return $this Fluent Builder
     */
    public function setDeviceId(string $deviceId): self {
        $this->options['deviceId'] = $deviceId;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Oauth.V1.CreateTokenOptions ' . $options . ']';
    }
}