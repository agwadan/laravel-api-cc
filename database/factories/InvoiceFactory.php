<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
  /* @var string */

  /* protected $model = Invoice::class; */

  /* @return array */

  public function definition()
  {

    $status = $this->faker->randomElement((['B', 'P', 'V']));

    return [
      'customer_id' => Customer::factory(),
      'amount' => $this->faker->numberBetween(100, 20000),
      'status' => $status,
      'billed_date' => $this->faker->dateTimeThisDecade(),
      'paid_date' => $status == 'p' ? $this->faker->dateTimeThisDecade() : null,
    ];
  }
}
