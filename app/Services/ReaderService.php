<?php


namespace App\Services;


use App\Collections\ProductCollection;
use App\Contracts\IOfferCollection;
use App\Contracts\IReader;
use App\Hydrators\ProductHydrator;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class ReaderService implements IReader
{

    /**
     * @param string $input
     * @return IOfferCollection
     */
    public function read(string $input): IOfferCollection
    {
        try {
            $products=[];
            $response = $this->getProductsData($input);
            $response = json_decode($response->getBody(), true);
            if (isset($response['special_offers']))
                $products= $this->mockProductsResponse($response['special_offers']);
            return new ProductCollection($products);
        } catch (GuzzleException $exception) {
            Log::alert('API Down ' . $input, ['trace' => $exception->getTraceAsString()]);
        } catch (\Exception $exception) {
            Log::alert('API Down' . $input, ['trace' => $exception->getTraceAsString()]);
        }
    }

    /**
     * @param string $input
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function getProductsData(string $input)
    {
        $client = new Client();
        return $client->request('GET', $input);
    }

    /**
     * @return array
     */
    protected function mockProductsResponse($products): array
    {
        // TODO: Implement mockResponse() method.
        $hydratedProducts=[];
        foreach ($products as $product) {
            $hydratedProducts[]=ProductHydrator::hydrate($product);

        }
        return $hydratedProducts;
    }
}
