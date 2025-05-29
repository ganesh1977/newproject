import torch
import torch.nn as nn
import torch.optim as optim

# Dummy model
model = nn.Linear(10, 1)
criterion = nn.MSELoss()
optimizer = optim.SGD(model.parameters(), lr=0.01)
print(optimizer)

# Dummy data
x = torch.randn(100, 10)
y = torch.randn(100, 1)
# Training loop
for epoch in range(100):
    print(epoch)
    optimizer.zero_grad()
    output = model(x)
    loss = criterion(output, y)
    loss.backward()
    optimizer.step()

    # Optional: print loss every 10 epochs
    if epoch % 10 == 0:
        print(f"Epoch [{epoch}/100], Loss: {loss.item():.4f}")

