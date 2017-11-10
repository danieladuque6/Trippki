<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <title>Trippki</title>
  <meta content="" name="description">
  <meta content="" name="author">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img//apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
  <link href="/favicon.ico" rel="icon">
<?php include("inc/css.php"); ?><?php include("inc/js.php"); ?>
</head>
<body class="">
  <?php include("./inc/tracker-pixel.php"); ?>
  <div class="wrap wow fadeIn" data-wow-delay="0s" data-wow-duration=".1s">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <?php include("inc/header.php"); ?>
        <div class="main-content discover">
          <div class="container" id="">
            <div class="row">
              <div class="col-md-12 main-content">
                <div class="row">
                  <div class="col-md-8">
                    <h1>Making travel more rewarding</h1>
                    <p>Finding and booking accommodation has never been easier. Visit any large Online Travel Agent (OTAs) and you’ll be presented with a disorienting amount of offers. But what on the surface seems like a great service has come at significant cost to both the hotels and customers. Hotels suffer both financially, and in terms of brand degradation, while the customer isn’t presented with the best offers.</p>
                    <p>Hotels want to have a direct relationship with their customers, that’s how they can offer their guests the best service and the best deals. Reward systems offer an answer, but hotels are struggling with how to implement a reward solution that really works, something that creates true value and ultimately builds loyalty with their guests.</p>
                    <p>While loyalty reward systems helps to establish a relationship with a customer, in practice they don’t deliver. Points are hard to redeem, are not interoperable and are hard for the hotels to maintain. The Trippki loyalty reward system is powered by a crypto-token, TRIP, that enables a new level of customer experience, and doesn’t require maintenance on behalf of the hotel owner. TRIP is a cryptographically secure and decentralised token, a crypto-asset that is robust and redeemable at the holder’s discretion. TRIP token value comes from the access to a cost-efficient universal loyalty points travel economy.</p>
                    <p>For the guest TRIP has immediate utility as it can be used to pay for hotel bookings and services on Trippki. Over time customers build reputation within the platform, allowing hotels to tailor bespoke offers to them.</p>
                  </div>
                  <div class="col-md-4"><img alt="" class="d-inline-block align-top discover-pic" height="" src="assets/img/Backpacker.png"></div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <p>Trippki, unlike any other OTA, is designed to generate network effects, because it is scalable and open. The distribution of TRIP ensures the economic incentives align quickly to achieve the necessary tipping point. TRIP is not inflationary, only 200 Million TRIP tokens will be minted, 40% of which are available through the Token Sale and 40% of which are locked into a Smart Contract called The Vault, and are released as the system scales. At predefined milestones The Vault reduces the overall supply of TRIP by buying it from the market and burning it.</p>
                  </div>
                </div>
                <div class="row overview">
                  <div class="col-md-12">
                    <h2>Architecture Overview</h2>
                    <h4>Ethereum provides the ideal technical infrastructure to build the solution, as it has an existing ecosystem of DApps that Trippki can integrate with. The Trippki Reward System comprises the following elements:</h4>
                    <div class="row overview-sub">
                      <div class="col-md-4"><img alt="" class="d-inline-block align-top" height="" src="assets/img/InteractionDiagram_Overview.png"></div>
                      <div class="col-md-1"></div>
                      <div class="col-md-7">
                        <p><strong>TRIP Token.</strong> A crypto-asset allowing for the secure and robust transfer of loyalty reward value.</p>
                        <p><strong>Identity Service.</strong> Used to simplify the process of generating cryptographic key pairs and linking them to registered identities e.g. the hotels and guests. The solution will integrate with an existing identity service which would encapsulate the connection between cryptographic pseudonymic identities (ECDSA* key pairs) and user accounts.</p>
                        <p><strong>Exchange.</strong> Trippki ecosystem has it’s own payment processing and exchange system, where TRIP is bought and sold against other currencies, both fiat and other cryptocurrency. The service will integrate with a number of different exchanges for this purpose.</p>
                        <p><strong>The Vault.</strong> The Vault is a smart contract that holds 40% of the total supply of TRIP Tokens. It’s purpose is to supply liquidity during the bootstrapping phase and use its funds to put deflationary pressure on the token supply.</p>
                        <p>ETH (or an Ethereum based stable coin) accrued from selling TRIP tokens from The Vault will be used to buy back TRIP tokens from the exchange and ‘burn’ them on pre-defined milestones. It uses an oracle to define the conditions under which it can be used.</p>
                        <p><strong>Oracle.</strong> An oracle is an authenticated data feed system that monitors the exchange and any number of external booking services and can query the identity service. This includes TRIP transactions on the Ethereum blockchain, and will therefore be informed of the reputation different identities acquire.</p>
                        <p>A core function of the oracle is to provide reliable data to The Vault and to The Reward Service. The oracle determines the Vault’s behaviour depending on the market conditions, securing against market manipulation.</p>
                        <p>On specified milestones (defined in number of reward tokens or reward transactions or market value) the oracle will allow a transaction that uses the accrued Ether to purchase TRIP tokens from the exchange and ‘burn’ them. These purchase transactions, however, must not be deterministically predictable, as this will enable front running, so they will require additional signatures (m-out-of-n multisig). The oracle is an additional way to keep this process honest and transparent and prevent market manipulation.</p>
                        <p><strong>Reward Service.</strong> It ensures that every participant can use their preferred payment methods while being a part of decentralised reward and reputation system. Whenever a customer closes a transaction with a hotel (this can be payment at checkout, payment on reservation or whatever the hotel wishes it to be) the service rewards the customer with TRIP tokens.</p>
                        <p>The service will accept payment in fiat currency from the hotel, along with the wallet address (from the identity service) of the customer to be rewarded. The service will purchase TRIP tokens either freely on the exchange or from the vault, and transfer those tokens to the customer's wallet.</p>
                        <p>For a fuller explanation please refer to the white paper. A technical AMA will be scheduled before launch, join our Slack to find out the upcoming dates.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row diagram">
                  <div class="col-md-12">
                  <h2>Interaction Diagram</h2><img alt="" class="mx-auto d-block" height="" src="assets/img/InteractionDiagram_Detail%20(2).png"></div>
                </div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                    <p><strong>Hotel</strong> asks the <strong>Reward Service</strong> to reward a specific address (listed in the Identity Service as belonging to the guest) an amount of TRIP equivalent to X dollars.</p>
                    <p>The <strong>Reward Service</strong> contacts the <strong>Exchange</strong> to establish TRIP price.</p>
                    <p>The <strong>Reward Service</strong> creates a transaction to buy the right amount of TRIP from <strong>The Vault</strong>, and triggers the <strong>Oracle</strong>.</p>
                  </div>
                  <div class="col-md-5">
                    <p>The <strong>Oracle</strong> contacts the <strong>Identity Service</strong> and the <strong>Booking Site</strong> to validate the transaction, signs it and publishes it to the <strong>Crypto Component</strong> (Ethereum blockchain).</p>
                    <p>The <strong>Reward Service</strong> publishes a transaction to the <strong>Crypto Component</strong>, transferring the newly purchased TRIP to the <strong>guest’s</strong> address.</p>
                  </div>
                  <div class="col-md-1"></div>
                </div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <p>Since the reward transaction take place on a blockchain, the system includes an immutable and highly secure reputation component, which is leveraged for monitoring and fraud detection, obtaining statistics about the system, and strengthening relationships and loyalty between hotels and guests.</p>
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--/End  wrapper -->
  <?php include("inc/footer.php"); ?>
</body>
</html>
