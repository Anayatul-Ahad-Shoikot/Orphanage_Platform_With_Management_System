const int sensorPin = A0;
#define RL 10
#define m -0.263
#define b 0.42
#define Ro 20

void setup()
{
    Serial.begin(9600);
    Serial.println("MQ2 warming up!");
    delay(20000);
    pinMode(sensorPin, INPUT);
    pinMode(Buzz, OUTPUT);
    pinMode(relay, OUTPUT);
}

void loop()
{
    float VRL;
    float Rs;
    float ratio;
    float sensorValue = analogRead(sensorPin);
    Serial.println(sensorValue);
    VRL = sensorValue * (5.0 / 1023.0);
    Rs = ((5.0 * RL) / VRL) - RL;
    ratio = Rs / Ro;
    float ppm = pow(10, ((log10(ratio) - b) / m));
    Serial.print("PPM: ");
    Serial.println(ppm);
}