<?php 
declare(strict_types=1);

namespace Gizmo\GithubUserActivityCli;
class GithubActivity {
  private const BASE_URL = "https://api.github.com";

  public function displayHelp(): void
  {
    echo "Welcome to the best CLI ever made.\n" . PHP_EOL;
    echo "github-activity <username> : show data for this profil Github\n" . PHP_EOL;
  }

  private function checkCURLEnabled(): void
  {
    if(function_exists('curl_init')){
      echo "cURL support is enabled";
    } else {
      echo "cURL support is not enabled";
    }
  }

  public function getUserData(string $username): void
  {
      echo $this->checkCURLEnabled();
      
      $endpoint = self::BASE_URL . "/user";

  }
}
