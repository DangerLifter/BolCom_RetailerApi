<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order;

final class AddressDetails
{
    private $salutationCode;
    private $firstName;
    private $surName;
    private $streetName;
    private $houseNumber;
    private $houseNumberExtended;
    private $addressSupplement;
    private $extraAddressInformation;
    private $zipCode;
    private $city;
    private $countryCode;
    private $email;
    private $company;
    private $vatNumber;
    private $deliveryPhoneNumber;

    public function __construct(string $salutationCode, string $firstName, string $surName, string $streetName, string $houseNumber, string $houseNumberExtended = null, string $addressSupplement = null, string $extraAddressInformation = null, string $zipCode, string $city, string $countryCode, string $email, string $company = null, string $vatNumber = null, string $deliveryPhoneNumber = null)
    {
        $this->salutationCode = $salutationCode;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->streetName = $streetName;
        $this->houseNumber = $houseNumber;
        $this->houseNumberExtended = $houseNumberExtended;
        $this->addressSupplement = $addressSupplement;
        $this->extraAddressInformation = $extraAddressInformation;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->email = $email;
        $this->company = $company;
        $this->vatNumber = $vatNumber;
        $this->deliveryPhoneNumber = $deliveryPhoneNumber;
    }

    public function salutationCode(): string
    {
        return $this->salutationCode;
    }

    public function firstName(): string
    {
        return $this->firstName;
    }

    public function surName(): string
    {
        return $this->surName;
    }

    public function streetName(): string
    {
        return $this->streetName;
    }

    public function houseNumber(): string
    {
        return $this->houseNumber;
    }

    public function houseNumberExtended()
    {
        return $this->houseNumberExtended;
    }

    public function addressSupplement()
    {
        return $this->addressSupplement;
    }

    public function extraAddressInformation()
    {
        return $this->extraAddressInformation;
    }

    public function zipCode(): string
    {
        return $this->zipCode;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function countryCode(): string
    {
        return $this->countryCode;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function company()
    {
        return $this->company;
    }

    public function vatNumber()
    {
        return $this->vatNumber;
    }

    public function deliveryPhoneNumber()
    {
        return $this->deliveryPhoneNumber;
    }

    public function withSalutationCode(string $salutationCode): AddressDetails
    {
        return new self($salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withFirstName(string $firstName): AddressDetails
    {
        return new self($this->salutationCode, $firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withSurName(string $surName): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withStreetName(string $streetName): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withHouseNumber(string $houseNumber): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withHouseNumberExtended(string $houseNumberExtended = null): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withAddressSupplement(string $addressSupplement = null): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withExtraAddressInformation(string $extraAddressInformation = null): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withZipCode(string $zipCode): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withCity(string $city): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withCountryCode(string $countryCode): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $countryCode, $this->email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withEmail(string $email): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $email, $this->company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withCompany(string $company = null): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $company, $this->vatNumber, $this->deliveryPhoneNumber);
    }

    public function withVatNumber(string $vatNumber = null): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $vatNumber, $this->deliveryPhoneNumber);
    }

    public function withDeliveryPhoneNumber(string $deliveryPhoneNumber = null): AddressDetails
    {
        return new self($this->salutationCode, $this->firstName, $this->surName, $this->streetName, $this->houseNumber, $this->houseNumberExtended, $this->addressSupplement, $this->extraAddressInformation, $this->zipCode, $this->city, $this->countryCode, $this->email, $this->company, $this->vatNumber, $deliveryPhoneNumber);
    }

    public static function fromArray(array $data): AddressDetails
    {
        if (! isset($data['salutationCode']) || ! \is_string($data['salutationCode'])) {
            throw new \InvalidArgumentException("Key 'salutationCode' is missing in data array or is not a string");
        }

        $salutationCode = $data['salutationCode'];

        if (! isset($data['firstName']) || ! \is_string($data['firstName'])) {
            throw new \InvalidArgumentException("Key 'firstName' is missing in data array or is not a string");
        }

        $firstName = $data['firstName'];

        if (! isset($data['surName']) || ! \is_string($data['surName'])) {
            throw new \InvalidArgumentException("Key 'surName' is missing in data array or is not a string");
        }

        $surName = $data['surName'];

        if (! isset($data['streetName']) || ! \is_string($data['streetName'])) {
            throw new \InvalidArgumentException("Key 'streetName' is missing in data array or is not a string");
        }

        $streetName = $data['streetName'];

        if (! isset($data['houseNumber']) || ! \is_string($data['houseNumber'])) {
            throw new \InvalidArgumentException("Key 'houseNumber' is missing in data array or is not a string");
        }

        $houseNumber = $data['houseNumber'];

        if (isset($data['houseNumberExtended'])) {
            if (! \is_string($data['houseNumberExtended'])) {
                throw new \InvalidArgumentException("Value for 'houseNumberExtended' is not a string in data array");
            }

            $houseNumberExtended = $data['houseNumberExtended'];
        } else {
            $houseNumberExtended = null;
        }

        if (isset($data['addressSupplement'])) {
            if (! \is_string($data['addressSupplement'])) {
                throw new \InvalidArgumentException("Value for 'addressSupplement' is not a string in data array");
            }

            $addressSupplement = $data['addressSupplement'];
        } else {
            $addressSupplement = null;
        }

        if (isset($data['extraAddressInformation'])) {
            if (! \is_string($data['extraAddressInformation'])) {
                throw new \InvalidArgumentException("Value for 'extraAddressInformation' is not a string in data array");
            }

            $extraAddressInformation = $data['extraAddressInformation'];
        } else {
            $extraAddressInformation = null;
        }

        if (! isset($data['zipCode']) || ! \is_string($data['zipCode'])) {
            throw new \InvalidArgumentException("Key 'zipCode' is missing in data array or is not a string");
        }

        $zipCode = $data['zipCode'];

        if (! isset($data['city']) || ! \is_string($data['city'])) {
            throw new \InvalidArgumentException("Key 'city' is missing in data array or is not a string");
        }

        $city = $data['city'];

        if (! isset($data['countryCode']) || ! \is_string($data['countryCode'])) {
            throw new \InvalidArgumentException("Key 'countryCode' is missing in data array or is not a string");
        }

        $countryCode = $data['countryCode'];

		if (isset($data['email'])) {
			if (! \is_string($data['email'])) {
				throw new \InvalidArgumentException("Value for 'email' is not a string in data array");
			}
			$email = $data['email'];
		} else {
			$email = null;
		}

        if (isset($data['company'])) {
            if (! \is_string($data['company'])) {
                throw new \InvalidArgumentException("Value for 'company' is not a string in data array");
            }

            $company = $data['company'];
        } else {
            $company = null;
        }

        if (isset($data['vatNumber'])) {
            if (! \is_string($data['vatNumber'])) {
                throw new \InvalidArgumentException("Value for 'vatNumber' is not a string in data array");
            }

            $vatNumber = $data['vatNumber'];
        } else {
            $vatNumber = null;
        }

        if (isset($data['deliveryPhoneNumber'])) {
            if (! \is_string($data['deliveryPhoneNumber'])) {
                throw new \InvalidArgumentException("Value for 'deliveryPhoneNumber' is not a string in data array");
            }

            $deliveryPhoneNumber = $data['deliveryPhoneNumber'];
        } else {
            $deliveryPhoneNumber = null;
        }

        return new self(
            $salutationCode,
            $firstName,
            $surName,
            $streetName,
            $houseNumber,
            $houseNumberExtended,
            $addressSupplement,
            $extraAddressInformation,
            $zipCode,
            $city,
            $countryCode,
            $email,
            $company,
            $vatNumber,
            $deliveryPhoneNumber
        );
    }
}
