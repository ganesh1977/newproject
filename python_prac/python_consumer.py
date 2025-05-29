from kafka import KafkaConsumer
import json

# Configure the Kafka broker address
bootstrap_servers = ['localhost:9092']

# Create a Kafka consumer instance
consumer = KafkaConsumer(
    'my-topic',
    bootstrap_servers=bootstrap_servers,
    auto_offset_reset='earliest',  # start from the beginning
    enable_auto_commit=False,  # disable auto commit
    group_id='my-group',       # consumer group id
    value_deserializer=lambda x: json.loads(x.decode('utf-8'))
)

# Consume messages from the Kafka topic
for message in consumer:
    print(f"Received message: {message.value}")

# Commit the offsets (optional, but recommended)
consumer.commit()

# Close the consumer
consumer.close()