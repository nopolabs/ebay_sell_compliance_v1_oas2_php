# ebay_sell_compliance_v1_oas2_php
Service for providing the compliance violations of seller account/listings

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/nopolabs/ebay_sell_compliance_v1_oas2_php.git"
    }
  ],
  "require": {
    "nopolabs/ebay_sell_compliance_v1_oas2_php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/ebay_sell_compliance_v1_oas2_php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Compliance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Compliance\Api\ListingViolationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = "x_ebay_c_marketplace_id_example"; // string | This header is required and is used to specify the eBay marketplace identifier. Supported values for this header can be found in the MarketplaceIdEnum type definition. Note that Version 1.1.0 of the Compliance API is only supported on the US, UK, Australia, Canada {English), and Germany sites.
$compliance_type = "compliance_type_example"; // string | A seller uses this query parameter to retrieve listing violations of a specific compliance type. Only one compliance type value should be passed in here. See ComplianceTypeEnum for more information on the compliance types that can be passed in here. If the listing_id query parameter is used, the compliance_type query parameter {if passed in) will be ignored. This is because all of a listing's policy violations {each compliance type) will be returned if a listing_id is provided. Either the listing_id or a compliance_type query parameter must be used, and if the seller only wants to view listing violations of a specific compliance type, both of these parameters can be used. Note: The listing_id query parameter is not yet available for use, so the seller does not have the ability to retrieve listing violations for one or more specific listings. Until the listing_id query parameter becomes available, the compliance_type query parameter is required with each getListingViolations call.
$offset = 56; // int | The first policy violation to return based on its position in the collection of listing violations. Use this parameter in conjunction with the limit parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves listing violations 11 thru 20 from the resulting collection of listing violations. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. If the listing_id parameter is included in the request, this parameter will be ignored. Default: 0 {zero)
$listing_id = "listing_id_example"; // string | Note: This query parameter is not yet supported for the Compliance API. Please not that until this query parameter becomes available, the compliance_type query parameter is required with each getListingViolations call. This query parameter is used if the user wants to view all listing violations for one or more eBay listings. The string value passed into this field is the unique identifier of the listing, sometimes referred to as the Item ID. Either the listing_id or a compliance_type query parameter must be used, and if the seller only wants to view listing violations of a specific compliance type, both of these parameters can be used. Up to 50 listing IDs can be specified with this query parameter, and each unique listing ID is separated with a comma.
$limit = 56; // int | This query parameter is used if the user wants to set a limit on the number of listing violations that are returned in the current result set. This parameter is used in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves listing violations 11 thru 20 from the collection of listing violations that match the value set in the compliance_type parameter. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. If the listing_id parameter is included in the request, this parameter will be ignored. Default: 100 Maximum: 200

try {
    $result = $apiInstance->getListingViolations($x_ebay_c_marketplace_id, $compliance_type, $offset, $listing_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingViolationApi->getListingViolations: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.ebay.com/sell/compliance/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ListingViolationApi* | [**getListingViolations**](docs/Api/ListingViolationApi.md#getlistingviolations) | **GET** /listing_violation | getListingViolations
*ListingViolationSummaryApi* | [**getListingViolationsSummary**](docs/Api/ListingViolationSummaryApi.md#getlistingviolationssummary) | **GET** /listing_violation_summary | getListingViolationsSummary


## Documentation For Models

 - [ComplianceDetail](docs/Model/ComplianceDetail.md)
 - [ComplianceSummary](docs/Model/ComplianceSummary.md)
 - [ComplianceSummaryInfo](docs/Model/ComplianceSummaryInfo.md)
 - [ComplianceViolation](docs/Model/ComplianceViolation.md)
 - [CorrectiveRecommendations](docs/Model/CorrectiveRecommendations.md)
 - [NameValueList](docs/Model/NameValueList.md)
 - [PagedComplianceViolationCollection](docs/Model/PagedComplianceViolationCollection.md)
 - [ProductRecommendation](docs/Model/ProductRecommendation.md)
 - [VariationDetails](docs/Model/VariationDetails.md)


## Documentation For Authorization


## Authorization Code

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://auth.ebay.com/oauth2/authorize
- **Scopes**: 
 - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers


## Author




